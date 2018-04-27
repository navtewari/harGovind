    <div class="main">   
        <div class="reservation_top">
            <div class="container">          	 
                <div class="row">
                    <div class="col-md-5">
                        <div class="contact_left">
                            <h3>Contact Info</h3>
                            <iframe width="100%" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Har%20govind%20suyal%20school%2C%20haldwani&key=AIzaSyCLhJL8fD5gTA-ZZthonhF73Yhhg67QaSs" allowfullscreen></iframe>
                            <address class="address" style="font-weight: bold;">
                                <br>
                                <p>Kaladhungi Rd, kusumkhera, Haldwani, Uttarakhand 263139, INDIA</p>
                                <p>Phone:+91-9410167966,05946–260560</p>                            
                                <p>Email: <span><a href="mailto:hargovindsuyalkusumkhera1999@gmail.com">hargovindsuyalkusumkhera1999@gmail.com</a></span></p>
                            </address>
                        </div>
                    </div>
                    <div class="col-md-7 contact_right">
                        <h3>Contact Form</h3>
                        <div class="contact-form">
                            <form action="#" method="post">
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
                                <input type="text" name="txtname" placeholder="YOUR NAME" required="" class="textbox">
                                <input type="email" name="txtemail" placeholder="YOUR EMAIL" class="textbox">
                                <input type="number" pattern="[0-9]*" oninvalid="setCustomValidity('Plz enter 10 digit Contact Number');"  name="txtPhone" required="required" placeholder="PHONE NUMBER" class="textbox">
                                <textarea name="txtmessage" placeholder="YOUR MESSAGE"></textarea>
                                <input type="submit" value="Send Message">                                                               
                            </form>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>               
    </div>    
</div>