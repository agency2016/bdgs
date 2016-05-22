<section id="contentbody" style="padding-top: 20px;"> 
<div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>
            
              <div class="col-md-9">
            <div class="row">
                <div class="col-md-12">
                     <h1 class="text-center custom_heading">Leaflet List </h1>
                     <a href="<?php echo base_url('Leaflet/add_leaflet')?>" class="btn btn-primary" ><span class="glyphicon glyphicon-plus"></span> Add New</a>
                </div>
            </div>

            <div class="table-responsive">
                <table id="userListtable" class="table table-bordred table-striped table-responsives">
                    <thead>
                    <th><?php echo 'Title' ?></th>
                  
                    <th><?php echo 'View' ?></th>
                    <th><?php echo 'Edit' ?></th>

                    </thead>
                    <tbody>
                        <?php
                       
                        foreach ($leaflet_list as $row):
                            ?>
                            <tr>

                                <td><?php echo $row->title; ?></td>
                               
                                <td class="action-btn"><a href="<?php echo base_url('Leaflet/view_leaflet/' . $row->id); ?>"><button class="btn btn-info btn-xs"><i class="fa fa-user"></i></button></a></td>

                                <td class="action-btn"><a href="<?php echo base_url('Leaflet/edit_leaflet/' . $row->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>
                                

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