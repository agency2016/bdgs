<!-- ==================start content body section=============== -->
    <section id="contentbody">
      <div class="container">
        <div class="row wrapper_events">
        <!-- start left bar content -->
        <div class="col-sm-12 col-md-2 col-lg-2">
           
        </div>
        <div class=" col-sm-12 col-md-10 col-lg-10" style="">
            <div class="row">
                
                    <?php
                    $i = 0;
                    if ($event_list) {
                        $sliced_array = array_slice($event_list, 0, 3);
                        foreach ($sliced_array as $key => $value) {
                            $i++;
                            array_shift($event_list);
                            if($i ==  2){
                                ?>
                                <div class=" col-sm-6 col-md-6 col-lg-6" style="">
                                   
                                   <a class="home_link" href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>">
                                       <div class="thumbnail-event " style="border-top:1px solid orange;border-left:1px solid #dddddd;border-right:1px solid #dddddd;"> 
                                       <img class="img-responsive" style="width:100%;height:auto;" src="<?php echo $value->event_image; ?>" alt="">
                                        <div class="text-back" style="">
                                             <div class="text">

                                                <h2> <?php echo $value->headline; ?></h2>
                                                <p><?php echo strip_tags(mb_substr($value->event_detail_front,0,400, "utf-8")); ?></p>

                                            </div>

                                        </div>
                                       </div>
                                     </a>
<!--                                    single div-->
                                   
                                </div>
                                <?php
                            }
                            else{
                                ?>
                                    <div class=" col-sm-3 col-md-3 col-lg-3">
                                             <!--                                    single div-->
                                    <a class="home_link" href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>">
                                        <div class="thumbnail-event" style="border-top:1px solid #203558;border-left:1px solid #dddddd;border-right:1px solid #dddddd;">
                                            <img class="img-responsive" style="width:100%;height:auto;" src="<?php echo $value->event_image; ?>" alt="">
                                            <div class="text-back">
                                                 <div class="text">

                                                    <h3> <?php echo $value->headline; ?></h3>
                                                    <p><?php echo strip_tags(mb_substr($value->event_detail_front,0,252, "utf-8")); ?></p>

                                                </div>

                                            </div>
                                        </div>
                                     </a>
<!--                                    single div-->
                                    </div>
                                
                                <?php
                                
                            }
                           
                        }
                        echo '</div><div class="row">';
                         $sliced_array = array_slice($event_list, 0, 4);
                        foreach ($sliced_array as $key => $value) {
                            $i++;
                            array_shift($event_list);
                      
                            
                            ?>
                                    <div class=" col-sm-6 col-md-3 col-lg-3">
                                         <!--                                    single div-->
                                    <div class="thumbnail-event" href="#">
                                        <img class="img-responsive" style="width:100%;height:150px;" src="<?php echo $value->event_image; ?>" alt="">
                                        <div class="text-back">
                                             <div class="text">

                                                <h3> <?php echo $value->headline; ?></h3>
                                                <p><?php echo strip_tags(substr($value->event_detail_front, 0, 100)); ?></p>

                                            </div>

                                        </div>

                                     </div>
<!--                                    single div-->
                                            
                                    </div>
                                
                           <?php
                        }
                    }
                      
                    ?>
                
                
                
            </div>  
          </div>
          <!-- End left bar content -->
          
          <!-- start left bar content -->
          <div class="col-sm-12 col-md-2 col-lg-2">
            
          </div>
          <div class=" col-sm-12 col-md-10 col-lg-10">
              <div class="row">
                 <div class=" col-sm-6 col-xs-12 col-md-6 col-lg-6">
                    <?php
                    $i = 0;
                    if ($event_list) {
                        $sliced_array = array_slice($event_list, 0, 4);
                        foreach ($sliced_array as $key => $value) {
                            $i++;
                            array_shift($event_list);
                            
                                ?>
                                   
                                             <!--                                    single div-->
                                             <div class="row" style="margin-bottom: 10px;">
                                                 <div class=" col-sm-4 col-md-4 col-lg-4" style="padding-right: 0px;">
                                                    <a class="thumbnail-event home_link" href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>">
                                                     <img class="img-responsive" style="width:100%;height:100px" src="<?php echo $value->event_image; ?>" alt="">
                                                    </a>
                                                 </div>
                                                 <div class=" col-sm-8 col-md-8 col-lg-8" style="padding-left: 0px;">
                                                     <a class="thumbnail-event home_link" href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>">
                                        
                                                         <div class="text-back" style="background-color: #f1f1f1;height: 100px;">
                                                                 <div class="text">

                                                                    <h4> <?php echo strip_tags(substr($value->headline, 0, 100)); ?></h4>
                                                                    <p><?php echo strip_tags(substr($value->event_detail_front, 0, 100)); ?></p>

                                                                </div>

                                                            </div>

                                                         </a>
                                                 </div>
                                                 
                                             </div>
                                    
<!--                                    single div-->
                                  
                                
                                <?php
                         
                        }
                        echo '</div>';
                        foreach ($event_list as $key => $value) {
                            
                            ?>
                                   <div class=" col-sm-6 col-md-6 col-lg-6 hvr-bounce-in" >
                                         <!--                                    single div-->
                                    <a class="thumbnail-event home_link" href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>">
                                        <img class="img-responsive" style="width:100%;height:auto;" src="<?php echo $value->event_image; ?>" alt="">
                                        <div class="text-back" style="background-color: #f1f1f1;">
                                             <div class="text">

                                                <h2> <?php echo $value->headline; ?></h2>
                                                <p><?php echo strip_tags(mb_substr($value->event_detail_front,0,252, "utf-8"))  ;  ?>

                                            </div>

                                        </div>

                                     </a>
<!--                                    single div-->
                                            
                                    </div>
                                
                           <?php
                        }
                    }
                      
                    ?>
                
                
                
            </div>   
          </div>
          <!-- End left bar content -->
          

        </div>
      </div>
    </section>
  