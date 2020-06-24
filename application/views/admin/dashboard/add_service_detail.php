<section class="main-content container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
            <div class="card">
                <div class="card-heading card-default">Add Plans</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('Admin/dashboard/add_service_detail');?>" enctype="multipart/form-data">
                      <div class="row">
                      
                      <div class="col-md-3">
                      <div class="form-group">
                                    <label>Select Location</label>
                                    <select name="service_id" class="form-control m-b location">
                                        <?php foreach ($Scategory as $s) { ?>
                                            <option value="<?php echo $s['id']; ?>"><?php echo $s['name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                         </div>

                        <div class="col-md-3">
                          <div class="form-group ">
                            <label>sqft</label>
                            <input type="number" placeholder="sqft" name="sqft" class="form-control" id="name">
                             </div>
                         </div>


                         <div class="col-md-3">
                          <div class="form-group ">
                            <label> Plot Size</label>
                            <input type="number" placeholder="Plot Size" name="ploat_size" class="form-control" id="name">
                             </div>
                         </div>


                         <div class="col-md-3">
                          <div class="form-group ">
                          <label>Select Direction</label>
                                    <select name="direaction" class="form-control m-b location">
                                      
                                            <option value="West Facing">West Facing</option>
                                            <option value="South Facing">South Facing</option>
                                            <option value="North Facing">North Facing</option>
                                            <option value="East Facing">East Facing</option>
                                       
                                    </select>
                             </div>
                         </div>


                         <div class="col-md-3">
                          <div class="form-group ">
                            <label>Price From</label>
                            <input type="number" placeholder="Enter Price" name="price" class="form-control" id="name">
                             </div>
                         </div>
                       

                         <div class="col-md-3">
                          <div class="form-group ">
                            <label>Upload images</label>
                            <input type="file" name='image'  class="form-control" id="name">
                             </div>
                         </div>
                        

                         </div>
                         <button type="submit" class="btn btn-sm btn-primary AddLocation">Submit</button>
                        
                    </form>
                </div>
            </div>
        </div>
        
            <div class="col-md-12">
            <div class="card">
                <div class="card-heading card-default">
                 Category
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Service name</th>
                                <th>images</th>
                                <th>Sqft</th>
                                <th>Plot Size</th>
                                 <th>Direction</th>
                                 <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                         <tbody id="ListLocation">
                         <?php
                            $count = 1;
                            foreach ($services as $s) {
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $s['name']; ?></td>
                                    <td><img src="<?php echo base_url('images')."/". $s['image']; ?>" width="150" height="150"></td>
                                     <td><?php echo $s['sqft']; ?></td>
                                      <td><?php echo $s['plot_size']; ?></td>
                                      <td><?php echo $s['direaction']; ?></td>
                                       <td><?php echo $s['price']; ?></td>
                                    <td><button class="btn btn-danger" data-id="<?php echo $s['id']; ?>">DELETE</button></td>
                                </tr>
<?php } ?>


                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
</div>


       
</section>
<div class="modal fade" id="classModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Class</h5>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control class-name" value="">
                    </div>
                    <div class="clearfix">
                        <button type="button" class="btn  btn-primary pull-right save-change">Save Change</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('.AddLocation').on("click", function () {
        var name = $('#name').val();
        $.post("<?php echo base_url('Admin/dashboard/add_class'); ?>", {"name": name}, function (d) {
            if (d.status == 200) {
                $.toast({
                    heading: 'Success !',
                    text: 'Class Add Successfully !',
                    position: 'top-right',
                    loaderBg: '#fff',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
                $('<tr><td>#</td><td>' + name + '</td><td>' + d.date + '</td><tr>').appendTo('#ClassList');
            } else {

            }
        }, 'json');
    });
    
    var id;
    $('.edit-btn').on("click", function () {
        $('#classModal').modal('show');
        id = $(this).data().id;
        var name = $('.cls' + id).html();
        $('.class-name').val(name);
    });

    $('.save-change').on("click", function () {
        var cname= $('.class-name').val();
        $.post("<?php echo base_url('Admin/dashboard/update_class'); ?>", {"id": id, "cname": cname}, function (d) {
            if (d.status == 200) {
                $('.cls' + id).html(cname);
                $('#classModal').modal('hide');
                $.toast({
                    heading: 'Success !',
                    text: d.msg,
                    position: 'top-right',
                    loaderBg: '#fff',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
            }
        }, 'json');
    });

    $('.btn-danger').on("click", function () {
        var id = $(this).data().id;
        var th = $(this).closest('tr');
        var r = confirm("Are you want to delete this ?");
        if (r == true) {
            $.post("<?php echo base_url('Admin/dashboard/delete_plan'); ?>", {"id": id}, function (d) {
                if(d.status==200){
                    th.hide('1000');
                }
            },'json');
        } else {
            txt = "Cancel!";
        }
    });

</script><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

