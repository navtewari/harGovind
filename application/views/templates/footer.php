<div class="footer">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-md-5 footer_grid">
                        <h4>HarGovind Suyal Inter College</h4>
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> A School that provide moral and value based education connecting Indian culture & Traditions.</p>                        
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> Well equipped labs for all major stream subject i.e Physics, Chemistry, Biology</p>
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> Hi tech computer lab with wi-fi campus</p>
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> C.C.T.V Vigilance with adequate security streams</p>                        
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> Modern facilities of internet and smart classes</p>                        
                        <p align="justify"><span style="color: yellow; font-weight: bold;">&twoheadrightarrow;</span> Extra coaching classes for weak students</p>                        
                    </div>
                    <div class="col-md-3 footer_grid">
                        <h4>Our Programs</h4>
                        <div class="footer-list">
                            <ul>
                                <li class="list_top"><a href="">Why HarGovind Suyal</a></li>
                                <li class="list_top"><a href="">Teacher's Profile</a></li>
                                <li class="list_top"><a href="">Activities</a></li>
                                <li class="list_top"><a href="">Our Toppers</a></li>
                                <li class="list_top"><a href="">Achievements</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 footer_grid">
                        <h4>Our Address</h4>
                        <div class="company_address">
                            <p>500 Lorem Ipsum Dolor Sit,</p>
                            <p>22-56-2-9 Sit Amet, Haldwani,</p>
                            <p>India</p>
                            <p>Phone:(00) 0000000000</p>
                            <p>Fax: (000) 000 00 00 0</p>
                            <p>Email: <span><a href="#">info(at)hargovindsuyal.com</a></span></p>
                        </div>
                        <ul class="socials">
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="copy_right">
                    <p>&copy; 2018 All Rights Reserved Designed by <a href="#">Teamfreelancers.com</a> </p>
                </div>
                <div class="footer_nav">
                    <ul>
                        <li><a href="<?php echo site_url('web/');?>">Home</a></li>
                        <li><a href="#">Gallery</a></li>                        
                        <li><a href="<?php echo site_url('web/contact');?>">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
                                    $(document).ready(function () {

                                        var dd = $('.vticker').easyTicker({
                                            direction: 'up',
                                            easing: 'easeInOutBack',
                                            speed: 'slow',
                                            interval: 8000,
                                            height: 'auto',
                                            visible: 2,
                                            mousePause: 0,
                                            controls: {
                                                up: '.up',
                                                down: '.down',
                                                toggle: '.toggle',
                                                stopText: 'Stop !!!'
                                            }
                                        }).data('easyTicker');


                                        $('.vis').click(function () {
                                            dd.options['visible'] = 3;

                                        });

                                        $('.visall').click(function () {
                                            dd.stop();
                                            dd.options['visible'] = 0;
                                            dd.start();
                                        });

                                    });
    </script>

</body>
</html>
