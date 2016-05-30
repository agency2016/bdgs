<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
            
            <div class="col-md-9">

                <h1 class="text-center custom_heading">Contact</h1>
               <?php if(!$record){?>
                    <button class="btn btn-primary" data-title="Add" data-toggle="modal" data-target="#add" ><span class="glyphicon glyphicon-plus"></span> Contact</button>
               <?php }?>
                <div class="table-responsive">
                    <table id="statetable" class="table table-bordred table-striped">
                        <thead>
                        <th><strong>Description</strong></th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                            <?php if($record) {foreach ($record->result() as $result) { ?>
                                <tr>
                                    <td class="desc<?php echo $result->id; ?>"><div id="desc<?php echo $result->id; ?>"><?php echo $result->c_desc; ?></div></td>
                                   <td><button onclick="update_item(<?php echo $result->id; ?>)" class="btn btn-primary btn-xs" data-title="Edit"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
                                    <td><button onclick="delete_item(<?php echo $result->id; ?>)" value="<?php echo $result->id; ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span> Delete</button></td>
                                </tr>
                            <?php } }?>
                        </tbody>

                    </table>

                    <div class="clearfix"></div>  

                </div>
               
            </div>
        </div>
    </div>
    <!--end container fluid-->
</section>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Edit this record</h4>
                </div>
                <div class="modal-body">
                   
                    <div class="form-group">
                        <textarea id="a_desc_edit" name="a_desc_edit" class="form-control textarea" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer ">
                    <button type="button" id="update_confirm_click" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                    <hr>
                    <p id="error_edit"></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align" id="Heading">Delete this record</h4>
                </div>
                <div class="modal-body">

                    <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                </div>
                <div class="modal-footer ">
                    <button id="delet_confirm" value="1" type="button" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                    <h4 class="modal-title custom_align custom_heading" id="Heading">Central Committee</h4>
                </div>
                <div class="modal-body">
                 
                 
                 <div class="form-group">
                        <label>Description</label>
                        <textarea name="a_desc" id="a_desc" class="form-control textarea" rows="7"></textarea>
                 </div>                       
                    
                </div>
                <div class="modal-footer ">
                    <button name="submit" onclick="add_aboutus()" type="button" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-ok-sign"></span> ADD</button>
                    <p style="color: #ff0033;"><?php echo validation_errors(); ?></p>
                    <p id="error"></p>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>



<script>
    function add_aboutus() {
       
        var user_data = {
            
            c_desc: $('#a_desc').val()
        };
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>index.php/Contact/add',
            data: user_data,
            async: false,
            success: function (result) {
                if (result) {
                    document.getElementById("error").innerHTML = result;
                }
                else {
                    $("#add").modal('hide');
                    swal("successfully added");
                    location.reload();
                }
            }
        });
    }

    function delete_item(pid) {
        $('#delete').modal('show');
        $('#delet_confirm').on('click', function (e) {
            e.preventDefault();
            var sure = document.getElementById("delet_confirm").value;
            if (sure == 1) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo base_url(); ?>index.php/Contact/delete',
                    data: {edit_id: pid},
                    async: false,
                    success: function (result) {
                        $("#delete").modal('hide');
                        location.reload();
                    }
                });

            }
        });
    }

    function update_item(item) {

        $("#a_desc_edit").html( $('#desc'+item).html());
        $("#a_desc_edit").trumbowyg('html',$('#desc'+item).html());
        $('#edit').modal('show');
       // $('#edit').modal('show');
        
        //document.getElementById("a_desc_edit").innerHTML = document.getElementById('desc'+item).innerHTML;
        //tinyMCE.get('a_desc_edit').setContent(document.getElementById('desc'+item).innerHTML);


    
        $('#update_confirm_click').click(function () {
            var user_data = {
                edit_id: item,
                c_desc:$('#a_desc_edit').val()
            };
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>index.php/Contact/edit',
                data: user_data,
                async: false,
                success: function (result) {
                    if (result) {
                        document.getElementById("error_edit").innerHTML = result;
                    }
                    else {
                        $("#edit").modal('hide');
                        alert("successfully edit");
                        location.reload();
                    }
                }
            });
        });
     }
</script>