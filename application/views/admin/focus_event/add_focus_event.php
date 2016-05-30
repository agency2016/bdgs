<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-next_event-add" class='next_event-add-form' action="<?php echo base_url('Focus_event/add_focus_event/'); ?>" method="post"method="post"
                  accept-charset="UTF-8" enctype="multipart/form-data">

                        <a class="pull-right" title="Back to List" href="<?php echo base_url('Focus_event/focus_event_list')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="" class="required">Headline</label>
                            <input type="text" class="form-control" id="headline" required="true" name="headline" placeholder="headline">
                        </div>
                       <div class="form-group">
                            <label for="" class="required">Sub headline</label>
                            <input type="text" class="form-control" id="sub_headline" name="sub_headline" placeholder="sub_headline">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="required">Date</label>
                            <input type="text" class="form-control datepicker" id="event_date" name="event_date" placeholder="event_date">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="required">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="location">
                        </div>
                        
                        <div class="e_wrapper" style="padding: 10px;margin-bottom: 10px;background-color: #d1d1d1;">
                            <div class="e_image_wrapper">
                                <div class="e_image_single" data-count="1">
                                    <div class="form-group">
                                            <label for="" class="required">Image</label>
                                            <input type="file" data-count="1" name="images[]" id="image_1"/>

                                     </div>
                                    <div class="form-group">
                                            <label for="" class="required">Title</label>
                                            <input type="text" data-count="1" name="titles[]" id="title_1"/>

                                     </div>
                                    <div class="form-group">
                                            <label for="" class="required">Make this cover image</label>
                                            <input type="radio" data-count="1" value="1" name="cover" id="cover_1"/>

                                     </div>
                                    
                                </div>
                                
                            </div>
                            <a class="btn btn-primary image_add_more" data-count="1">Add More Image</a>
                        </div>
                        
                         <div class="form-group">
                            <label for="" class="required">Event Detail Front</label>
                            <textarea  class="" id="event_detail_front" name="event_detail_front" placeholder="event_detail_front"></textarea>
                        </div>
                        
                         <div class="form-group">
                            <label for="" class="required">Event Detail Rest</label>
                            <textarea  class="trumbo" id="event_detail_rest" name="event_detail_rest" placeholder="event_detail_rest"></textarea>
                        </div>
                        
                         <div id="mapbdgs" style="width: 500px; height: 400px;"></div>
                        <div class="form-group">
                            <label for="" class="required">Lat</label>
                            <input type="text" class="form-control" id="elat" name="elat" placeholder="elat">
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Long</label>
                            <input type="text" class="form-control" id="elong" name="elong" placeholder="elong">
                        </div>
                        
                        
                       
                        <button type="submit" class="btn btn-drugbd btn-drugbd-full">Submit</button>

                   </form>
                
                 </div>
             </div>
              
        </div>

</section>
<script>
    $(function(){
        $('#mapbdgs').locationpicker({
            location: {latitude: 23.810332, longitude: 90.41251809999994},	
            radius: 300,
            inputBinding: {
                    latitudeInput: $('#elat'),
                    longitudeInput: $('#elong'),
                    radiusInput: null,
                    locationNameInput: null       
            },
            enableAutocomplete: true,
            onchanged: function(currentLocation, radius, isMarkerDropped) {
                    //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
            }	
        });
    });
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