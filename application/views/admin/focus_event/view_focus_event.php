<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                               
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('dashboard/analysis')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Title</label>
                            <p><?php echo $focus_event_data->headline;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Sub Headline</label>
                            <p><?php echo $focus_event_data->sub_headline;?></p>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Detail front</label>
                            <p><?php echo $focus_event_data->event_detail_front;?></p>
                        </div>
                         <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Detail Rest</label>
                            <p><?php echo $focus_event_data->event_detail_rest;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Date</label>
                            <p><?php echo $focus_event_data->event_date;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Location</label>
                            <p><?php echo $focus_event_data->location;?></p>
                        </div>
                        
                        
                        
                       
                
                 </div>
              
        </div>
</div>
</section>
