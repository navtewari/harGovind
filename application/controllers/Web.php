<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('My_model', 'mm');
    }

    function index() {
        $data['updates'] = $this->mm->get_most_recent_news();
        $data['toppers'] = $this->mm->get_toppers();
        $this->load->view('templates/header');
        $this->load->view('index', $data);
        $this->load->view('templates/footer');
    }

    function about() {
        $data['pageName'] = 'About Us';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    function admission() {
        $data['pageName'] = 'Admission';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('admission');
        $this->load->view('templates/footer');
    }

    function Achievements() {
        $data['pageName'] = 'Our Achievements';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('achievement');
        $this->load->view('templates/footer');
    }
    

    public function recruiters() {
        $data['pageName'] = 'Recruiters';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('recruiters');
        $this->load->view('templates/footer');
    }

    public function gallery() {
        $data['pageName'] = 'Photo Gallery';
        $data['gallery_category'] = $this->mm->get_gallery_category();

        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('gallery-category', $data);
        $this->load->view('templates/footer');
    }
    
    public function profile() {
        $data['pageName'] = 'Teacher&amp;s Profile';
        $data['profile'] = $this->mm->get_profile();

        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('profile', $data);
        $this->load->view('templates/footer');
    }

    public function gallery_detail($id) {
        $data['pageName'] = 'Photo Gallery';
        $data['gallery'] = $this->mm->get_gallery($id);

        $this->load->view('templates/header', $data);
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('gallery', $data);
        $this->load->view('templates/footer');
    }

    function contact() {
        $data['pageName'] = 'Contact Us';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }

    function registration() {
        $data['pageName'] = 'Online Registration';
        
        $this->load->view('templates/header', $data);
        //$this->load->view('templates/headInnerPage', $data);
        $this->load->view('registration', $data);
        $this->load->view('templates/footer');
    }
    
    function activities() {
        $this->load->model('my_model', 'wm');
        $data['activity_'] = $this->mm->get_activities();
        if (count($data['activity_']) == 0)
            redirect('/');

        $data['pageName']='Activities';
        $this->load->view('templates/header');        
        $this->load->view('activities', $data);
        $this->load->view('templates/footer');
    }
    
    function uc_() {
        $to_ = 'ttchld@gmail.com';
        $from_ = 'info@teamfreelancers.com';
        $name_ = 'Hargivind Suyal';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Some database Error occurs in Hargivind Suyal website ...');
        $this->email->message('Some database Error occurs in Hargivind Suyal website ...');

        if ($this->email->send()) {
            redirect("https://www.google.co.in");
        }
    }

    function contactus() {
        $this->email->set_mailtype("html");

        $msg = "Enquiry below:<br /><br />";
        $msg = $msg . $this->input->post('txtmessage');

        $msg = $msg . "<br />";
        $msg = $msg . "From<br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtname');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtemail');
        $msg = $msg . "<br />";
        $msg = $msg . $this->input->post('txtPhone');

        $to_ = 'hargovindsuyalkusumkhera1999@gmail.com, info@hargovindsuyal.org';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Mail from Contact page of Hargovindsuyal website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Contacting us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }
        redirect('web/contact');
    }

    function registerMe() {
        $this->email->set_mailtype("html");

        $msg = "New Registration below:<br /><br />";
        $msg = $msg . "<br /><br />";

        $msg = $msg . "--------------";
        $msg = $msg . "<br />";
        $msg = $msg . "Name: " . $this->input->post('txtName');
        $msg = $msg . "<br />";
        $msg = $msg . "Email: " . $this->input->post('txtEmail');
        $msg = $msg . "<br />";
        $msg = $msg . "Phone Number: " . $this->input->post('txtNumber');
        $msg = $msg . "<br />";
        $msg = $msg . "Course Opted: " . $this->input->post('txtCourse');
        $msg = $msg . "<br />";
        $msg = $msg . "Address: " . $this->input->post('txtAddress');
        $msg = $msg . "<br />";
        $msg = $msg . "Message: " . $this->input->post('txtMessage');

        $to_ = 'hargovindsuyalkusumkhera1999@gmail.com, info@hargovindsuyal.org';
        $from_ = $this->input->post('txtEmail');
        $name_ = 'New Registration...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Online Registration from hargovindsuyal website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Registering with us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }
        redirect('web/registration');
    }

}
