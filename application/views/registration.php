<?php $this->load->view('templates/menu'); ?>	       
<div class="reservation_banner">
    <div class="main_title"><?php echo $pageName; ?></div>
    <div class="divider"></div>
</div>
</div>
<!-- Ends Header -->
<!------------ Start Content ---------------->  
<div class="main">   
    <div class="reservation_top">
        <div class="container">          	 
            <div class="row">
                <div class="col-md-6">
                    <div class="contact_left">
                        <h3><a href="#">Why Should You Join A<span style="text-transform:lowercase">im</span> Institute of Hotel Management?</a></h3>
                        <ul id="general-info">
                            <li>We Provide 100% Job Placement in India & Foreign Countries.</li>
                            <li>We Conduct English Speaking & Personality Development Classes.</li>
                            <li>We give Bar Tending Practicals of all Internationals Cocktail.</li>
                            <li>We Organize Different Events Regularly & Students can Participate in Event Management.</li>
                            <li>We have Hostel Facility Inside the Campus.</li>
                            <li>Free Five Star Hotel Visit for all Students.</li>
                            <li>We also give Chance to Earn While you Learn.</li>
                            <li>We Provide 6 Month Industrial Training in Five Star Hotels.</li>
                            <li>We give Library Facility to Student of International Books Collection.</li>
                            <li>Highly Qualified Faculty with International Experience.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 contact_right">
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
							<input type="number" pattern="[0-9]*" oninvalid="setCustomValidity('Plz enter 10 digit Contact Number');"  name="txtNumber" required="required" placeholder="PHONE NUMBER" class="textbox">
                            <select id="txtCourse" name="txtCourse" required onChange="getValues(this.value)">
                                <option>Select Course</option>
                                <option value="DegreeHotelManagement">Degree in Hotel Management </option>
                                <option value="AirHostess">Diploma in Aviation (Air Hostess)</option>
                                <option value="AdvancedHotelManagement">Advance Diploma in Hotel Management</option>
                                <option value="DiplomaHotelManagement">Diploma in Hotel Management</option>
                                <option value="DiplomaBarTending">Diploma in Bar Tending</option>                                
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