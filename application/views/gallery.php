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
            <?php foreach ($gallery as $item) { ?>
                <h3 class="hist"><?php echo $item->CATEGORY; ?>-Gallery</h3>
                <div style="float: right; margin-bottom: 2em;"><a href="<?php echo site_url('web/gallery') ?>"  style="color:#ff6600"><i class="fa fa-undo" aria-hidden="true"></i> Back to Gallery</a></div>
                <div style="clear:both;"></div>
                <?php
                break;
            }
            ?>                         
            <div class="row">                
                <div class="col-sm-12">
<?php foreach ($gallery as $item) { ?> 
                    <div class="col-sm-3" style="margin-bottom: 2em;">
                        <a href="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" class="b-link-stripe b-animate-go  swipebox"  title="HarGovind Suyal Photo Gallery">
                            <img src="<?php echo ADMIN___ . '/_assets_/gallery/' . $item->PHOTO_; ?>" alt="" class="img-responsive">
                        </a>            
                    </div>
<?php } ?>                                   
                </div>                                               
            </div>
        </div>
    </div>
</div>