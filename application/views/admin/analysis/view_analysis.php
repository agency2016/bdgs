<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-user-add" class='user-add-form' action="<?php echo base_url('dashboard/user/new/'); ?>" method="post">

                 
                    
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('dashboard/analysis')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Headline</label>
                            <p><?php echo $analysis_data->headline;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Writer</label>
                            <p><?php echo $analysis_data->writer;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Date</label>
                            <p><?php echo $analysis_data->a_date;?></p>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Description</label>
                            <?php echo $analysis_data->a_desc;?>
                        </div>
                       
                        <button type="submit" class="btn btn-drugbd btn-drugbd-full">Submit</button>

                   </form>
                
            
                
                 </div>
              
        </div>
</div>
</section>
