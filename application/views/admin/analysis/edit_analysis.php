<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-analysis-add" class='analysis-add-form' action="<?php echo base_url('analysis/edit_analysis/'.$analysis_data->id); ?>" method="post">

                
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('dashboard/analysis')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="" class="required">Headline</label>
                            <input type="text" class="form-control" id="headline" required="true" name="headline" placeholder="headline" value="<?php  echo $analysis_data->headline;?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Writer</label>
                            <input type="text" class="form-control" id="writer" name="writer" placeholder="writer" value="<?php  echo $analysis_data->writer;?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Date</label>
                            <input type="text" class="form-control datepicker" id="date" name="date" placeholder="date" value="<?php  echo $analysis_data->a_date;?>">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Description</label>
                            <textarea name="desc" class="trumbo"><?php  echo $analysis_data->a_desc; ?> </textarea>
                        </div>
                       
                        <button type="submit" class="btn btn-drugbd btn-drugbd-full">Submit</button>

                   </form>
                
            
                
                 </div>
             </div>
              
        </div>

</section>
<script>
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    }, "");

    $('#admin-dashboard-analysis-add').validate({
        ignore: [],
        rules: {
            headline: {
                required: true
            },
           
           writer: {
                required: true

            },
            desc: {
                required: true

            },
            
            date: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>