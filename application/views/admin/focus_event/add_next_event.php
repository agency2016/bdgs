<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-next_event-add" class='next_event-add-form' action="<?php echo base_url('Next_event/add_next_event/'); ?>" method="post"method="post"
                  accept-charset="UTF-8" enctype="multipart/form-data">

                        <a class="pull-right" title="Back to List" href="<?php echo base_url('Next_event/next_event_list')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="" class="required">Headline</label>
                            <input type="text" class="form-control" id="headline" required="true" name="headline" placeholder="headline">
                        </div>
                       
                        <div class="form-group">
                            <label for="" class="required">Date</label>
                            <input type="text" class="form-control datepicker" id="event_date" name="event_date" placeholder="event_date">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="required">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="location">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="required">FB Link</label>
                            <input type="text" class="form-control" id="fb_link" name="fb_link" placeholder="fb_link">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="required">Lat</label>
                            <input type="text" class="form-control" id="elat" name="elat" placeholder="elat">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Long</label>
                            <input type="text" class="form-control" id="elong" name="elong" placeholder="elong">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Image</label>
                            <input type="file" name="next_eventimage" id="next_eventimage"/>
                                              
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

    $('#admin-dashboard-next_event-add').validate({
        ignore: [],
        rules: {
            title: {
                required: true
            },
           
           date: {
                required: true

            },
            next_eventimage: {
                required: true

            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>