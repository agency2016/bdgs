<section event_id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluevent_id">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
            
              <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                     <h1 class="text-center custom_heading">Event List </h1>
                     <a href="<?php echo base_url('Event/add_event')?>" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span> Add New</a>
                </div>
            </div>

            <div class="table-responsive">
                <table event_id="userListtable" class="table table-bordred table-striped table-responsives">
                    <thead>
                    <th><?php echo 'Title' ?></th>
                  
                    <th><?php echo 'Date' ?></th>
                    <th><?php echo 'View' ?></th>
                    <th><?php echo 'Edit' ?></th>

                    </thead>
                    <tbody>
                        <?php
                       
                        foreach ($event_list as $row):
                            ?>
                            <tr>

                                <td><?php echo $row->headline; ?></td>
                               

                                <td><?php echo (date("d-M-Y", strtotime($row->event_date))); ?></td>
                                 
                                <td class="action-btn"><a href="<?php echo base_url('Event/view_event/' . $row->event_id); ?>"><button class="btn btn-info btn-xs"><i class="fa fa-user"></i></button></a></td>

                                <td class="action-btn"><a href="<?php echo base_url('Event/edit_event/' . $row->event_id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
                                

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