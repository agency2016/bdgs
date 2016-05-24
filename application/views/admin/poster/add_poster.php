<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-poster-add" class='poster-add-form' action="<?php echo base_url('Poster/add_poster/'); ?>" method="post"method="post"
                  accept-charset="UTF-8" enctype="multipart/form-data">

                 
                    
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('Poster/poster_list')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="" class="required">Title</label>
                            <input type="text" class="form-control" id="headline" required="true" name="title" placeholder="title">
                        </div>
                       
                        <div class="form-group">
                            <label for="" class="required">Date</label>
                            <input type="text" class="form-control datepicker" id="date" name="date" placeholder="date">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Image</label>
                            <input type="file" name="posterimage" id="posterimage"/>
                                              
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

    $('#admin-dashboard-poster-add').validate({
        ignore: [],
        rules: {
            title: {
                required: true
            },
           
           date: {
                required: true

            },
            posterimage: {
                required: true

            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>