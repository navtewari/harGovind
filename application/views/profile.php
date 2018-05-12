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
                <h3 class="hist">Our Staff</h3>            
            <div class="row">                
                <div class="col-sm-12">
<?php foreach ($profile as $item) { 
    if($item->PHOTO_  != '-'){
    ?> 
                    <div class="col-sm-3" style="margin-bottom: 3em;">                        
                           <img src="<?php echo base_url() . '/assets/Staff/' . $item->FAC_ID . ".jpg"; ?>" alt="" class="img-responsive img-thumbnail">
                           <h3 align="center" style="color: #0997dd;margin-top:1em;font-size:1.2em; font-weight: 600;"><?php echo $item->FACULTY_NAME;?></h3>
                           <p align="center" style="font-weight: 600; color: #cc0000"><?php echo $item->DESIG;?></p>
                    </div>
<?php } } ?>
                </div>                                               
            </div>
        </div>
    </div>
</div>