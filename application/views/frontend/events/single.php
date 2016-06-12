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
        <style>
            .hovereffect {
                  width: 100%;
                  height: 100%;
                  float: left;
                  overflow: hidden;
                  position: relative;
                  text-align: center;
                  cursor: default;
                }

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  background-color: rgba(0,0,0,0.6);
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate(460px, -100px) rotate(180deg);
  -ms-transform: translate(460px, -100px) rotate(180deg);
  transform: translate(460px, -100px) rotate(180deg);
  -webkit-transition: all 0.2s 0.4s ease-in-out;
  transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.2s ease-in;
  transition: all 0.2s ease-in;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
  -webkit-transform: translate(0px, 0px);
  -ms-transform: translate(0px, 0px);
  transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.5s;
  transition-delay: 0.5s;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}
        </style>
       
        <?php
                if($event_data){

                    ?>
<div class="container-fluid bredcram">
    <div class="row">
        <div class="col-md-12">
             ইভেন্ট <i class="fa fa-arrow-circle-o-right"></i> <?php echo $event_data->headline;?>
        </div>
    </div>
</div>
<section id="contentbody">
      <div class="container">
          <div class="row wrapper_events" style="min-height: 400px;">
        <!-- start left bar content -->
        <div class="col-sm-12 col-md-2 col-lg-2">

        </div>
          <div class=" col-sm-12 col-md-10 col-lg-10">
            <div class="row">


                        <h1><?php echo $event_data->headline;?></h1>
                        <h3><?php echo $event_data->sub_headline;?></h3>
                        <h3><?php echo reverse_date($event_data->event_date);?></h3>
                         <div class="demo-gallery">
                                      <ul id="lightgallery" class="list-unstyled row">
                                    <?php
                                    if($focus_event_image_data){
                                        foreach ($focus_event_image_data->result() as $key => $value) {
                                            ?>
                                                 <li  style="margin-bottom:20px;" class="col-xs-6 col-sm-4 col-md-4 " data-responsive="<?php echo $value->event_image;?> 375, <?php echo $value->event_image;?> 480, <?php echo $value->event_image;?> 800" data-src="<?php echo $value->event_image;?>" data-sub-html="<?php echo $value->title;?>">
                                                    <div class="hovereffect">
                                                        <img class="img-responsive" src="<?php echo $value->event_image;?>">
                                                        <div class="overlay">
                                                            <h2><?php echo $value->title;?></h2>
                                                            <a class="info" href="#">স্লাইড শো দেখতে ক্লিক করুন</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            <?php
                                        }
                                    }
                                    ?>

                                </ul>
                         </div>
                        <p>
                            <?php echo $event_data->event_detail_rest;?>
                        </p>
                        <?php
                                    if($event_video_data){
                                        echo '<h3>ইভেন্ট ভিডিও</h3>';
                                        echo '<ul class="list list-unstyled">';
                                        foreach ($event_video_data->result() as $key => $value) {
                                            ?>
                                              <li><a></a></li>
                        <?php }}?>
                                 </ul>
                    <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
</section>

            
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

