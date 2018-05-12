<link rel="stylesheet" href="<?php echo base_url('assets/css/swipebox.css'); ?>">
<script src="<?php echo base_url('assets/js/jquery.swipebox.min.js'); ?>"></script> 
<script type="text/javascript">
    jQuery(function ($) {
        $(".swipebox").swipebox();
    });
</script>

<div class="main">   
    <div class="reservation_top">
        <div class="container">          	 
            <h3 class="hist">Our Gallery</h3>
            <div class="row">                
                <div class="col-sm-12 history_grid">
                    <?php foreach ($gallery_category as $item) { ?> 
                        <a href="<?php echo site_url('web/gallery_detail/' . $item->CATEG_ID); ?>">                            
                            <div class="col-sm-4">	                           
                                <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt=" " class="img-responsive"><br>
                                <h3 align="center"><?php echo $item->CATEGORY; ?></h3>
                                <?php if ($item->DESC != '') { ?>
                                    <p align="center"><?php echo $item->DESC; ?></p>
                                <?php } ?>
                            </div>                                                      
                        </a>
                    <?php } ?>                     
                </div>                                               
            </div>
        </div>
    </div>
</div>    
