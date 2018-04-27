<div class="main">   
    <div class="reservation_top">
        <div class="container">          	 
            <h3 class="hist">A<span style="text-transform:lowercase">im</span> Photo Gallery</h3>
            <div class="row">
                <div class="category_widget">
                    <link rel="stylesheet" href="<?PHP echo base_url() . 'assets/css/lightbox.css'; ?>">                    
                    
                        <?php for ($i=1; $i<=42; $i++) { ?> 
                        <div class="col-sm-3" style="margin-bottom: 50px;">
                            <a href="<?php echo base_url(). '/assets/images/gallery/' . $i . '.jpg'; ?>"  data-lightbox="example-set">
                                <img src="<?php echo base_url(). '/assets/images/gallery/' . $i . '.jpg'; ?>" alt="" style="max-width:100%; max-height: 170px; margin:auto;display:block;" class="img-thumbnail">
                            </a>            
                        </div>
                        <?php } ?>
                        <div class="clearfix"></div>                    
                    <script src="<?php echo base_url('assets/js/lightbox-plus-jquery.min.js'); ?>"></script>
                </div>
            </div>
        </div>
    </div>               
</div>    
</div>