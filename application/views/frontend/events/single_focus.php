 <?php
                if($focus_event_data){
                    
                    ?>
<div class="container-fluid bredcram">
    <div class="row">
        <div class="col-md-12">
            ফোকাস ইভেন্ট <i class="fa fa-arrow-circle-o-right"></i> <?php echo $focus_event_data->headline;?>
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
                      
           
                        <h1><?php echo $focus_event_data->headline;?></h1>
                        <h3><?php echo $focus_event_data->sub_headline;?></h3>
                        <h3><?php echo reverse_date($focus_event_data->event_date);?></h3>
                        <p>
                            <?php echo $focus_event_data->event_detail_rest;?>
                        </p>
                    <?php
                }
                ?>
            </div>
          </div>
        </div>
      </div>
</section>
               
            