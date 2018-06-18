<div class="welcome_desc">                            
                            <h3>Our Toppers (2017-18) - Uttarakhand Board Merit</h3>
                            <div class="course_demo">
                                <ul id="flexiselDemo3">
                                    <?php foreach ($toppers as $item) { ?>
                                    <li>
                                        <img src="<?php echo base_url('dpanel/_assets_/toppers/'.$item->PHOTO_); ?>" class="img-responsive" style="width: 140px" />
                                        <div class="desc">
                                            <h3><?php echo $item->SNAME; ?></h3>
                                            <p style="color: #000; font-weight:bold;"><?php if($item->MERIT_NAME != 'x') { echo $item->MERIT_NAME; } ?><br> 
                                                <?php echo $item->YOP; ?><br>
                                                <?php if($item->RANK != 'x') { echo $item->RANK; }?>
                                            </p>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                                <script type="text/javascript">
                                    $(window).load(function () {
                                        $("#flexiselDemo3").flexisel({
                                            visibleItems: 4,
                                            animationSpeed: 1000,
                                            autoPlay: true,
                                            autoPlaySpeed: 3000,
                                            pauseOnHover: true,
                                            enableResponsiveBreakpoints: true,
                                            responsiveBreakpoints: {
                                                portrait: {
                                                    changePoint: 480,
                                                    visibleItems: 1
                                                },
                                                landscape: {
                                                    changePoint: 640,
                                                    visibleItems: 2
                                                },
                                                tablet: {
                                                    changePoint: 768,
                                                    visibleItems: 2
                                                }
                                            }
                                        });
    
                                    });
                                </script>
                                <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.flexisel.js'); ?>"></script>
                            </div>
                        </div>