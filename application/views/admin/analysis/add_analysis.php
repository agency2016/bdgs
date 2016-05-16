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
                            <input type="text" class="form-control" id="email" required="true" name="email" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Writer</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Date</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required">Description</label>
                            <textarea></textarea>
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

    $('#admin-dashboard-user-add').validate({
        ignore: [],
        rules: {
            full_name_bn: {
                required: true
            },
           
           email: {
                required: true

            },
            phone: {
                required: true

            },
            
            role: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>