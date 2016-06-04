<link href="<?php echo base_url('resources/css/lightgallery.css')  ?>" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="<?php echo base_url('resources/js/lightgallery.js')  ?>"></script>

    <script src="<?php echo base_url('resources/js/lg-fullscreen.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-thumbnail.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-video.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-autoplay.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-zoom.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-hash.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/lg-pager.js')  ?>"></script>
        <script src="<?php echo base_url('resources/js/jquery.mousewheel.min.js')  ?>"></script>
        <div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                <?php
                if($focus_event_image_data){
                    foreach ($focus_event_image_data->result() as $key => $value) {
                        ?>
                             <li class="col-xs-6 col-sm-4 col-md-4" data-responsive="<?php echo $value->event_image;?> 375, <?php echo $value->event_image;?> 480, <?php echo $value->event_image;?> 800" data-src="<?php echo $value->event_image;?>" data-sub-html="<?php echo $value->title;?>">
                                <a href="">
                                    <img class="img-responsive" src="<?php echo $value->event_image;?>">
                                </a>
                            </li>
                        <?php
                    }
                }
                ?>
               
               
            </ul>
        </div>
        <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

