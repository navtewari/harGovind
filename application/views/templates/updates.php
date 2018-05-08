<div class="vticker">
                        <ul>                                
                            <?php foreach ($updates as $item) { ?>
                            <li>                                        
                                <h4><?php echo $item->SUBJECT; ?></h4>
                                <p align="justify">
                                    <?php echo $item->NEWS; ?>
                                    <br>
                                    <div style="clear: both; padding: 1px"></div>
                                    <div style="padding: 1px 3px; float: left; font-size: 10px; color: #0090aa;">
                                    <?php echo $item->DATE_." | ".$item->TIME_;?>
                                    </div>
                                    <?php if($item->PATH_ATTACH != 'x'){?>
                                        <div style="padding: 1px 3px; float: right; font-size: 10px; color: #0090aa;">
                                        <?php echo anchor('#', '[ click for detail ]', 'style="color:#0090aa"');?>
                                        </div>
                                    <?PHP } ?>
                                    <div style="clear: both; padding: 0px"></div>
                                </p>
                            </li>  
                            <?php } ?>
                        </ul>
                    </div>
                    <div style="float:right; margin-top:10px;">
                        <button class="btn btn-primary up"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                        <button class="btn btn-primary down"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i></button>
                        <button class="btn btn-primary toggle"></button>
                    </div>