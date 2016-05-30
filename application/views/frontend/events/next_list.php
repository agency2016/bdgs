<!-- ==================start content body section=============== -->
    <section id="contentbody">
      <div class="container">
        <div class="row wrapper_events">
        
          
          <!-- start left bar content -->
          <div class="col-sm-12 col-md-2 col-lg-2">
            
          </div>
            <div class=" col-sm-12 col-md-10 col-lg-10">
            <div class="row">
                
                    <?php
                    $i = 0;
                    if ($event_list) {
                        $sliced_array = array_slice($event_list, 0, 3);
                        foreach ($sliced_array as $key => $value) {
                            $i++;
                            array_shift($event_list);
                            
                                ?>
                                    <div class=" col-sm-4 col-md-4 col-lg-4">
                                             <!--                                    single div-->
                                    <div class="thumbnail-event" href="#">
                                        <img class="img-responsive" style="width:100%;height:250px;" src="<?php echo $value->image; ?>" alt="">
                                        <div class="text-back">
                                             <div class="text">

                                                <h3> <?php echo $value->headline; ?></h3>
                                                <p><?php echo strip_tags(substr($value->location, 0, 300)); ?></p>

                                            </div>

                                        </div>

                                     </div>
<!--                                    single div-->
                                    </div>
                                
                                <?php
                                
                            
                           
                        }
                        echo '</div><div class="row">';
                        foreach ($event_list as $key => $value) {
                            
                            ?>
                                    <div class=" col-sm-6 col-md-4 col-lg-4">
                                         <!--                                    single div-->
                                    <div class="thumbnail-event" href="#">
                                        
                                        <div class="text-back">
                                             <div class="text">

                                                <h3> <?php echo $value->headline; ?></h3>
                                                <p><?php echo strip_tags(substr($value->location, 0, 100)); ?></p>

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
      </div>
    </section>
  