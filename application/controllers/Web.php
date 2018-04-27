<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    function __construct(){
        parent::__construct();        
    }
    function index() {                 
       $this->load->view('templates/header');
        $this->load->view('index');
        $this->load->view('templates/footer');
    }

    function about() {        
        $data['pageName']='About Us';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('about');
        $this->load->view('templates/footer');
    }

    function courses() {        
        $data['pageName']='Our Courses';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('courses');
        $this->load->view('templates/footer');
    }  
    
    public function whyAIM() {              
        $data['pageName']='Why AIM';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('why');
        $this->load->view('templates/footer');
    }

    public function recruiters() {              
        $data['pageName']='Recruiters';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('recruiters');
        $this->load->view('templates/footer');
    }
    
    public function gallery() {              
        $data['pageName']='Photo Gallery';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('gallery');
        $this->load->view('templates/footer');
    }
        
    function contact() {     
        $data['pageName']='Contact Us';
        $this->load->view('templates/header');
        $this->load->view('templates/headInnerPage', $data);
        $this->load->view('contact');
        $this->load->view('templates/footer');
    } 
    
    function registration() {     
        $data['pageName']='Online Registration';
        $this->load->view('templates/header');        
        $this->load->view('registration', $data);
        $this->load->view('templates/footer');
    } 
    
    function uc_(){
        $this->load->view('error');
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

        $to_ = 'aimhaldwani2014@gmail.com';
        $from_ = $this->input->post('txtemail');
        $name_ = 'Enquiry...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Mail from Contact page of AIHM website');
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

        $to_ = 'aimhaldwani2014@gmail.com';
        $from_ = $this->input->post('txtEmail');
        $name_ = 'New Registration...';

        $this->email->from($from_, $name_);
        $this->email->to($to_);

        $this->email->subject('Online Registration from AIHM website');
        $this->email->message($msg);

        if ($this->email->send()) {
            $this->session->set_flashdata('_msg_', 'Thanks for Registering with us. We will get back to you very soon...');
        } else {
            $this->session->set_flashdata('_msg_', 'Something goes wrong. Please try again...');
        }
        redirect('web/registration');
    }
}
