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
                            <p><?php echo $poster_data->title;?></p>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Date</label>
                            <p><?php echo $poster_data->p_date;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Image</label>
                            <img src="<?php echo $poster_data->image;?>" />
                        </div>
                       
                
                 </div>
              
        </div>
</div>
</section>
