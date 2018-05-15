<?php $this->load->view('templates/menu'); ?>	       
<div id="slider">
    <div><img src="<?php echo base_url('assets/images/4.jpg'); ?>" class="img-responsive" alt="img01"/></div>
    <div><img src="<?php echo base_url('assets/images/5.jpg'); ?>" class="img-responsive" alt="img01"/></div>
    <div><img src="<?php echo base_url('assets/images/2.jpg'); ?>" class="img-responsive" alt="img01"/></div>
    <div><img src="<?php echo base_url('assets/images/1.jpg'); ?>" class="img-responsive" alt="img02"/></div>
    <div><img src="<?php echo base_url('assets/images/3.jpg'); ?>" class="img-responsive" alt="img03"/></div>            
</div>
</div>
<!-- Ends Header -->
<!------------ Start Content ---------------->
<div class="main">
    <div class="content-bottom wow fadeInLeft" data-wow-delay="0.4s" id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="welcome_desc">
                        <?php if(count($toppers) > 3){ ?>
                            <?php $this->load->view('templates/toppers'); ?>
                        <?php } else { ?>
                        <h3 align="center" style="margin-top:1em;"><b>HARGOVIND SUYAL SARASWATI VIDYA MANDIR  INTER COLLEGE  KUSUMKHERA HALDWANI</b></h3>
                        <h3 align="center" style="color: #0997dd; font-size: 1.7em;">(A Unit of Vidya Bharti)</h3>
                        <h3 align="center" style="color: #000; font-size: 1.5em;">( Hindi and English Medium Senior Secondary Co-ed School )</h3>
                        <h3 align="center"  style="color: #cc3300; font-size: 1.5em;line-height: 1.3em; margin-top:2em;"> A School that provide moral and value based education connecting<br> Indian culture & Traditions</h3>                        
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-4 middle_right">
                    <h3>Latest Updates</h3>                        
                    <?php $this->load->view('templates/updates.php'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="reservation_top">
        <div class="container">            
            <div class="row">
                <div class="col-sm-6">
                    <img src="<?php echo base_url('assets/images/h1.jpg'); ?>" class="img-responsive" alt=""/>
                </div>
                <div class="col-sm-6 history_grid">
                    <h3>Welcome to Our School</h3>					
                    <p align="justify" style="font-size:1em; line-height:30px;">The school was established on 1 July 1999 with only 56 students and 3 teachers from class 6 at Dharmanand Tiwari’s house. Later the sort started from August 2000 with class VI and VII in its own building (under Construction) The entire land for School was donated by Mrs. Haruli Devi W/o Late Shri Hargovind Suyal. The School building was constructed in very short period with the great effort of contemporary local management. </p>                        
                    <nav class="cl-effect-7" id="cl-effect-7">
                        <a href="<?php echo site_url('web/about'); ?>">Read More</a>

                    </nav>					                    
                </div>
            </div>
        </div>
    </div>
    <div class="content-bottom">
        <div class="container">
            <h3 class="hist">Our Guiding Star</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="post1">       
                        <h3><a href="#">Manager's Message</a></h3>                            
                        <p align="justify"><img src="<?php echo base_url('assets/images/avatar.png'); ?>" alt="image" class="img-responsive img-thumbnail" style="margin:0 10px; min-width: 170px;" align='left'> Education is the most important part of a person's life. It not only modifies the animal instincts but also instils moral and ethical merits. It is the responsibility of the educational institutions to provide an atmosphere of freedom to each and every one irrespective of any discrimination.</p>
                        <!--nav class="cl-effect-7" id="cl-effect-7">
                            <a href="#cl-effect-7">Read More</a>
                        </nav-->
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="post1">
                        <h3><a href="#">Prinicipal's Message</a></h3>                                                        
                        <p align="justify"><img src="<?php echo base_url('assets/images/principal.jpg'); ?>" alt="image" class="img-responsive img-thumbnail" style="margin:0 10px;" align='left'> Hargovind Suyal Intermediate School situated far from the hustle and bustle of city life, surrounded by the peaceful mountains terrain a really healthy and congenial atmosphere, plans to introduce a new concept and effective technique of education in Hindi/English medium.</p>
                        <!--nav class="cl-effect-7" id="cl-effect-7">
                            <a href="#cl-effect-7">Read More</a>
                        </nav-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reservation wow fadeInLeft" data-wow-delay="0.4s" id="work">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div id="main-reservation-text"><h3>Call us <span>+91-9410167966,05946–260560</span> or enquire right now!</h3>
                        <p>A Unit of Vidya Bharti - Hindi and English Medium Senior Secondary Co-ed School</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <a href="<?php echo site_url('web/registration');?>" title="Enquiry" class="btn btn-primary btn-normal btn-inline " target="_self">Online registration</a>
                </div>
            </div>
        </div>
    </div>        
</div>