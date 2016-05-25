<section focus_event_id="contentbody" style="padding-top: 20px;"> 
<div class="container-flufocus_event_id">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
            
              <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                     <h1 class="text-center custom_heading">Focus_event List </h1>
                     <a href="<?php echo base_url('Focus_event/add_focus_event')?>" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span> Add New</a>
                </div>
            </div>

            <div class="table-responsive">
                <table focus_event_id="userListtable" class="table table-bordred table-striped table-responsives">
                    <thead>
                    <th><?php echo 'Title' ?></th>
                  
                    <th><?php echo 'Date' ?></th>
                    <th><?php echo 'View' ?></th>
                    <th><?php echo 'Edit' ?></th>

                    </thead>
                    <tbody>
                        <?php
                       
                        foreach ($focus_event_list as $row):
                            ?>
                            <tr>

                                <td><?php echo $row->headline; ?></td>
                               

                                <td><?php echo (date("d-M-Y", strtotime($row->event_date))); ?></td>
                                 
                                <td class="action-btn"><a href="<?php echo base_url('Focus_event/view_focus_event/' . $row->focus_event_id); ?>"><button class="btn btn-info btn-xs"><i class="fa fa-user"></i></button></a></td>

                                <td class="action-btn"><a href="<?php echo base_url('Focus_event/edit_focus_event/' . $row->focus_event_id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
                                

                            </tr>
                        <?php endforeach; ?>

                    </tbody>

                </table>

                <div class="clearfix"></div>

            </div><!-- end of table  div -->

        </div> <!-- end of col-9 div -->
        </div>
</div>
</section>
<script>
    $(document).ready(function () {
        
        $('#userListtable').dataTable();
       
    });
</script>