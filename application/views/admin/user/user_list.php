<div class="container-fluid drugbd_wrapper">
    <div class="row">
        <?php $this->view('admin/dashboard/dashboard_menu'); ?>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">

                     <h1 class="text-center custom_heading"><?php echo get_string('user_list') ?></h1>
                     <a href="<?php echo base_url('dashboard/user/new')?>" class="btn btn-drugbd" ><span class="glyphicon glyphicon-plus"></span> <?php echo get_string('add_user')?></a>
                </div>
            </div>

            <div class="table-responsive">
                <table id="userListtable" class="table table-bordred table-striped table-responsives">
                    <thead>
                    <th><?php echo get_string('dtname') ?></th>
                    <th><?php echo get_string('dtemail') ?></th>
                    <th><?php echo get_string('dtjoin_date') ?></th>
                    <th><?php echo get_string('dtrole') ?></th>
                    <th><?php echo get_string('dtview') ?></th>
                    <th><?php echo get_string('edit') ?></th>
                    <th><?php echo get_string('dtstatus') ?></th>

                    </thead>
                    <tbody>
                        <?php
                        $roles = user_roles();
                        foreach ($user_list as $row):
                            ?>
                            <tr>

                                <td><?php echo $row->full_name_bn; ?></td>
                                <td><?php echo $row->email; ?></td>

                                <td><?php echo reverse_date(date("d-M-Y", strtotime($row->signup_date))); ?></td>
                                 <td class="action-btn"><?php echo $roles[$row->role]; ?></td>
                                 <td class="action-btn"><a href="<?php echo base_url('dashboard/user/view/' . $row->user_id); ?>"><button class="btn btn-info btn-xs"><i class="fa fa-user"></i></button></a></td>

                                <td class="action-btn"><a href="<?php echo base_url('dashboard/user/edit/' . $row->user_id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
                                <td class="action-btn"><a href="<?php echo base_url('dashboard/user/status/' . $row->user_id); ?>" 
                                   <?php 
                                        if($row->is_active == 1) {
                                            $msg = get_string('sure_unpublish');
                                        }
                                        else{
                                            $msg = get_string('sure_publish');
                                        }
                                    
                                  ?>                        
                                <?php echo ($row->is_active == 1) ? 'onclick="return confirm(\''.$msg.'\')"><button title="Active" class="btn btn-success btn-xs"><i class="fa fa-unlock"></i>' : 'onclick="return confirm(\''.$msg.'\')"><button title="Deactive" class="btn btn-danger btn-xs"><i class="fa fa-lock"></i>' ?></button></a></td>


                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>

                <div class="clearfix"></div>

            </div><!-- end of table  div -->

        </div> <!-- end of col-9 div -->
    </div><!-- end of row div -->

</div><!-- end of container div -->
<script>
    $(document).ready(function () {
        var lang = "<?php echo site_language();?>";
        if(lang == 'bangla'){
            var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/Bangla.json';
        }
        else{
             var url = '//cdn.datatables.net/plug-ins/1.10.10/i18n/English.json';
        }
        $('#userListtable').dataTable({
                "order": [[ 2, "desc" ]],
                "language": {
                    "url": url
                }
            });
        //$('#userListtable').dataTable();
        //$('#userListtable_filter').append('<br><input type="text"/><input type="text"/>');
    });
</script>