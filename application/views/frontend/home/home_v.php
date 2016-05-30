<!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header">Thumbnail Gallery</h1>
            </div>
            
            <div class="col-lg-9 col-md-4 col-xs-6">
                <div class="row">
                    <div class="col-lg-8 image-holder">
                      <?php
                                $main_id = 0;
                                 if($event){
                                     $fdata  = ($event->row());
                                     $main_id = $fdata->event_id;

                      ?>
                       <div class="thumbnail-home" href="#">
                            <img class="img-responsive" style="height:415px;width:100%" src="<?php echo $fdata->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text-block">

                                    <h2> <?php echo $fdata->headline; ?></h2>
                                  

                                        <p><?php echo $fdata->event_detail_front; ?>
                                     
                                </div>

                            </div>

                         </div>
                        <?php }?>
                    </div>
                    <div class="col-lg-4 image-holder">
                         <?php
                                 if($featured_event){
                                     $fdata  = ($featured_event->row());
                                 
                              ?>
                         <div class="thumbnail-home" href="#">
                            <img class="img-responsive" style="width:100%" src="<?php echo $fdata->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text">
                               
                                    <h2> <?php echo $fdata->headline; ?></h2>
                               
                                    
                                        <p><?php echo $fdata->event_detail_front; ?>
                                      
                                </div>
                                
                            </div>

                         </div>
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
                        <div class="col-lg-6 image-holder">
                             <div class="thumbnail-home" href="#">
                                 <img class="img-responsive" style="height:305px;width:100%" src="<?php echo $value->event_image; ?>" alt="">
                            <div class="text-back">
                                 <div class="text-block">

                                    <h2> <?php echo $value->headline; ?></h2>
                                  

                                        <p><?php echo $value->event_detail_front; ?>
                                    
                                </div>

                            </div>

                             </div>
                            
                        </div>
                <?php }}}?>
                    </div>
                
              
            </div>
            
            
            <div class="col-lg-3 col-md-4 col-xs-6 image-holder">
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
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $value->next_event_id; ?>"><?php echo $value->headline; ?></a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo $value->next_event_id; ?>" class="panel-collapse collapse <?php echo ($i ==0)? 'in':'';?>">
                                <div class="panel-body">
                                     <img class="img-responsive" style="height:150px;width:100%;" src="<?php echo $value->image; ?>" alt="">
                                     <p><?php echo $value->event_date; ?></p>   
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
   