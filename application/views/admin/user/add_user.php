<div class="container-fluid drugbd_wrapper"> 
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-lg-9 col-md-7 col-sm-8">
        <form role="form" id="admin-dashboard-user-add" class='user-add-form' action="<?php echo base_url('dashboard/user/new/'); ?>" method="post">

            <div class="add_user_shadow">
                <div class="row">
                    <div class="col-md-5">
                        <div class="form-group">

                            <label for="exampleInputEmail1" class="required"><?php echo get_string('full_name')?></label>

                            <input type="text" name="full_name_bn" class="form-control" required="true"id="full_name_bn" placeholder="<?php echo get_string('full_name')?>">

                        </div>

                         <div class="form-group">
                            <label for="exampleInputEmail1"> <?php echo get_string('address')?></label>
                            <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                        </div>
                        



                    </div>
                    <div class="col-md-7">
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('dashboard/users')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required"><?php echo get_string('emailaddress')?></label>
                            <input type="email" class="form-control" id="email" required="true" name="email" placeholder="<?php echo get_string('email')?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="required"><?php echo get_string('phone')?></label>
                            <input type="number" class="form-control" id="phone" name="phone" placeholder="">
                        </div>
                       <div class="form-group">
                            <label for="exampleInputEmail1"><?php echo get_string('dtrole')?></label>
                            <?php 
                              $roles = user_roles();
                              echo form_dropdown('role', $roles, 3,'class="form-control"');
                            ?>
                            
                        </div>
                         <button type="submit" class="btn btn-drugbd btn-drugbd-full"><?php echo get_string('submit')?></button>

                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    $.validator.addMethod("valueNotEquals", function (value, element, arg) {
        return arg != value;
    }, "<?php echo get_string('jquery_select_box_error')?>");

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