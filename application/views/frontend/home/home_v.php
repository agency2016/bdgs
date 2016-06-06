<!-- Page Content -->
    <div class="container">

        <div class="row" style="margin-top: 30px;">
      <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                <div class="row">
                    <div class="col-lg-9  col-md-9 col-sm-8 col-xs-12 image-holder">
                         <span class="" ><h3 style="border-bottom:2px solid red;">ইভেন্ট</h3></span>
                      <?php
                                $main_id = 0;
                                 if($event){
                                     $fdata  = ($event->row());
                                     $main_id = $fdata->event_id;

                      ?>
                       <a href="<?php  echo base_url('Event/detail/'.$fdata->event_id.'/'.  url_title($fdata->headline))?>" class="home_link">
                       <div class="thumbnail-home" href="#">
                            <img class="img-responsive" style="height:auto;width:100%" src="<?php echo $fdata->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text-block">

                                    <h2> <?php echo $fdata->headline; ?></h2>
                                   <p><?php echo strip_tags(mb_substr($fdata->event_detail_front,0,252, "utf-8"))  ; ?>
                                    </p>
                                </div>

                            </div>

                         </div>
                       </a>
                        <?php }?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 image-holder focus_event">
                         <span class="" ><h3 style="border-bottom:2px solid #E13300;"> ফোকাস ইভেন্ট</h3></span>
                         <?php
                                 if($featured_event){
                                     $fdata  = ($featured_event->row());
                                 
                              ?>
                         <a href="<?php  echo base_url('Focus_event/detail/'.$fdata->focus_event_id.'/'.  url_title($fdata->headline))?>" class="home_link">
                         <div class="thumbnail-home" href="#">
                            <img class="img-responsive" style="width:100%" src="<?php echo $fdata->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text">
                               
                                    <h2> <?php echo $fdata->headline; ?></h2>
                                    <p class="featured_event_p"><?php echo strip_tags(mb_substr($fdata->event_detail_front,0,252, "utf-8")) ; ?>
                                      
                                </div>
                                
                            </div>

                         </div></a>
                        <?php }?>
                    </div>
                  </div>
                    <div class="row">
                         <?php
                                 if($event){
                                     $fdata  = ($event->result());
                                     foreach ($fdata as $key => $value) {
                                        if($value->event_id != $main_id){

                      ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 image-holder">
                           <a href="<?php  echo base_url('Event/detail/'.$value->event_id.'/'.  url_title($value->headline))?>" class="home_link">
                             <div class="thumbnail-home" href="#">
                                 <img class="img-responsive" style="height:auto;width:100%" src="<?php echo $value->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text-block">

                                    <h2> <?php echo $value->headline; ?></h2>
                                    <p><?php echo strip_tags(mb_substr($value->event_detail_front,0,122, "utf-8"))  ; ?></p>
                                    
                                </div>

                            </div>

                             </div>
                           </a>
                            
                        </div>
                <?php }}}?>
                    </div>
                
              
            </div>
            
            
            <div class="col-lg-3 col-md-3 col-xs-12  col-sm-3 image-holder">
                 <span class="" ><h3 style="border-bottom:2px solid #0078ae;"> নেক্সট ইভেন্ট</h3></span>
                <div class="bs-example">
                    <div class="panel-group" id="accordion">
                        
                          <?php
                                $i = 0;
                                 if($next_event){
                                     $fdata  = ($next_event->result());
                                     foreach ($fdata as $key => $value) {
                                         

                      ?>
                <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" class="home_link" data-parent="#accordion" href="#collapse<?php echo $value->next_event_id; ?>"><?php echo $value->headline; ?></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $value->next_event_id; ?>" class="panel-collapse collapse <?php echo ($i ==0)? 'in':'';?>">
                                <div class="panel-body">
                                     <img class="img-responsive" style="height:auto;width:100%;" src="<?php echo $value->image; ?>" alt="">
                                     <br/>
                                     <p><?php echo reverse_date($value->event_date); ?></p>
                                     <p><?php echo strip_tags(mb_substr($value->content,0,322, "utf-8"))  ; ?></p>
                                     <span class="home_location" ><?php echo $value->location; ?></span>
                                </div>
                            </div>
                        </div>
                 <?php $i++;}}?>
                     


                    </div>

                </div>
                 
            </div>
            
        </div>

    </div>
   