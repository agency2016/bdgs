<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
             <div class="col-lg-9 col-md-7 col-sm-8">
                 <form role="form" id="admin-dashboard-leaflet-add" class='leaflet-add-form' action="<?php echo base_url('Leaflet/edit_leaflet/').'/'.$leaflet_data->id; ?>" method="post"method="post"
                  accept-charset="UTF-8" enctype="multipart/form-data">

                 
                    
                        <a class="pull-right" title="Back to List" href="<?php echo base_url('Leaflet/leaflet_list')?>"><i class="fa fa-2x fa-arrow-circle-o-left"></i> </a>
                       
                        <div class="form-group">
                            <label for="" class="required">Title</label>
                            <input type="text" class="form-control" id="headline" required="true" value="<?php echo $leaflet_data->title;?>" name="title" placeholder="title">
                        </div>
                       
                        <div class="form-group">
                            <label for="" class="required">Desc</label>
                            <textarea class="trumbo" name="l_desc" ><?php echo $leaflet_data->l_desc;?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="" class="required">Image</label>
                            <img src="<?php echo $leaflet_data->image;?>" />
                            <input type="file" name="leafletimage" id="leafletimage"/>
                                              
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

    $('#admin-dashboard-leaflet-add').validate({
        ignore: [],
        rules: {
            title: {
                required: true
            }
        },
        highlight: function (element) {
            $(element).closest('.control-group').removeClass('success').addClass('error');
        }
    });
</script>