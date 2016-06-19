<section id="contentbody" style="padding-top: 20px;">
      <div class="container-fluid">
       
        <div class="row" style="min-height: 600px;">
            <div class="col-md-3">
                <?php $this->view('admin/menu'); ?>
            </div>

            <div class="col-md-9">
                <div class="row">
                    <h1 class="text-center">    গণ সনহতি ড্যাশবোর্ড
                    </h1>
                    <a class="btn changeTable">Change</a>
                    <table id="userListtable" class="table table-bordered">
                        <thead>
                   
                        <th>First Name </th>
                        <th>Last Name </th>
                        <th>Phone </th>
                        <th>Address </th>

                        </thead>
                        <tbody id="tablebody">
                          <?php for ($i = 0;$i <=20;$i++){?>
                            <tr>
                                <td>
                                   First Name
                                </td>
                                <td>
                                   Last Name
                                </td>
                                <td>
                                   1234
                                </td>
                                <td>
                                   Address
                                </td>
                                
                            </tr>
                          <?php }?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        
        $('#userListtable').dataTable({columns: [
        { data: 'first_name' },
        { data: 'last_name' },
        { data: 'phone' },
        { data: 'address' }
    ]});
        $('.changeTable').click(function(){
            var ajaxReturnJson = 
                {
                "items": [
                  {
                    "first_name": "First",
                    "last_name": "Last1",
                    "phone":1234,
                    "address":"example address"
                    
                  },{
                    "first_name": "First2",
                    "last_name": "Last2",
                    "phone":12345,
                    "address":"example address"
                    
                  },{
                    "first_name": "First3",
                    "last_name": "Last3",
                    "phone":12346,
                    "address":"example address"
                    
                  }
                ]
               
              }

            
            
//            var dataTableFormattedArray=[
//                
//                 
//            ]
//             
//              $.each(ajaxReturnJson.items, function(i, field){
//                   console.log(field);
//                    dataTableFormattedArray.push({col0:field.first_name,col1:field.last_name,col2:field.phone,col3:field.address})
//                });
               //$('#tablebody').html(html);
               $('#userListtable').dataTable().fnClearTable();
               $('#userListtable').dataTable().fnAddData(ajaxReturnJson.items);
        });
       
    });
</script>