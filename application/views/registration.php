<?php $this->load->view('templates/menu'); ?>	       
<div class="reservation_banner">
    <div class="main_title"><?php echo $pageName; ?></div>
    <div class="divider"></div>
</div>
</div>
<!-- Ends Header -->
<!------------ Start Content ---------------->
<!------------ Start Content ---------------->  
<div class="main">   
    <div class="reservation_top">
        <div class="container">          	 
            <div class="row">
                <div class="col-md-7">
                    <div class="contact_left">
                        <h3>Why Should You Join <br>Hargovind Suyal Saraswati Vidya Mandir Inter College?</h3>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Teaching work is done by highly qualified and trained teacher with the help of latest technology.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Candidate N.S.S in school.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> All around personality development based on Indian Culture and Modern based education system.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Emphasized on the cultures full of patriotism and character generating.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> A good and suitable arrangement for developing moral education ande general Knowledge.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Special attention on Physical and Mental development.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Complete development of students interests.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Extra coaching classes for weak students.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> To create competitive feelings among students with different type of competition.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Good arrangement of library and reading room.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Science laboratories    full of all new and modern instrument.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Good facility of computer education with new and modern computers.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Arrangement of security guard to look after the School.</li>
                            <li class="list-group-item"><i class="fa fa-gear" style="color: #f70707"></i> Modern facilities of internet and smart classes.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5 contact_right">
                    <h3>Register Here</h3>
                    <div class="contact-form" style="background: #ffcc99; padding: 20px;">
                        <form action="<?PHP echo site_url('web/registerMe'); ?>" method="post">
                            <?php if ($this->session->flashdata('_msg_')) { ?>
                                <div class="row">
                                    <div class="col-sm-12 border-bottom" style="text-align: center; padding: 5px; color: #ff0000; font-weight: bold; background: #ffff00; border-radius: 10px">
                                        <?php echo $this->session->flashdata('_msg_'); ?>
                                    </div>
                                    <div class="col-sm-12">
                                        &nbsp;
                                    </div>
                                </div>
                            <?php } ?>                            
                            <input type="text" name="txtName" required class="textbox" placeholder="Your Name">
                            <input type="email" name="txtEmail" class="textbox" placeholder="Your Email">                            							                            
                            <?php
                            $data = array(
                                'type' => 'number',
                                'name' => 'txtNumber',
                                'id' => 'txtNumber',
                                'pattern' => '[0-9]*',
                                'oninvalid' => "setCustomValidity('Plz enter 10 digit Contact Number')",
                                'onchange' => "try{setCustomValidity('')}catch(e){}",
                                'minlength' => '10',
                                'maxlength' => '10',
                                'required' => 'required',
                                'placeholder' => 'Phone Number'
                            );
                            echo form_input($data);
                            ?>
                            <select id="txtCourse" name="txtCourse" required onChange="getValues(this.value)">
                                <option>Select Class</option>
                                <?php for ($i = 6; $i <= 12; $i++) { ?>
                                    <option value="<?php echo 'Class' . $i ?>"><?php echo 'Class ' . $i ?></option>
                                <?php } ?>                                                               
                            </select>

                            <input type="text" name="txtAddress" required class="textbox" placeholder="Address">
                            <textarea value="Any Message" name="txtMessage">Message</textarea>
                            <input type="submit" value="Register"/>                                
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>               
</div>    
</div>