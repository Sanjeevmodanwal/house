<section class="main-content container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
            <div class="card">
                <div class="card-heading card-default">Add Plans</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('Admin/dashboard/add');?>" enctype="multipart/form-data">
                      <div class="row">
                      
                      <div class="col-md-3">
                      <div class="form-group">
                                    <label>Select Location</label>
                                    <select name="category_id" class="form-control m-b location">
                                        <?php foreach ($category as $cat) { ?>
                                            <option value="<?php echo $cat['id']; ?>"><?php echo $cat['category_name']; ?></option>
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
                            <label> Floors</label>
                            <input type="number" placeholder="Floors" name="floor" class="form-control" id="name">
                             </div>
                         </div>


                         <div class="col-md-3">
                          <div class="form-group ">
                            <label>Beds</label>
                            <input type="number" placeholder="Beds" name="beds" class="form-control" id="name">
                             </div>
                         </div>


                         <div class="col-md-3">
                          <div class="form-group ">
                            <label>Baths</label>
                            <input type="number" placeholder="bath" name="bath" class="form-control" id="name">
                             </div>
                         </div>
                       

                         <div class="col-md-3">
                          <div class="form-group ">
                            <label>Upload images</label>
                            <input type="file" name='files[]' multiple class="form-control" id="name">
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
                                <th>category name</th>
                                <th>images</th>
                                <th>Sqft</th>
                                <th>Floor</th>
                                 <th>Beds</th>
                                 <th>Baths</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                         <tbody id="ListLocation">
                            <?php
                            $count = 1;
                            foreach ($plans as $p) {
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td class="lname<?php echo $cat['id']; ?>"><?php echo $p['cate_name']; ?></td>
                                    <td class="ladd<?php echo $cat['id']; ?>"><img src="<?php echo base_url('images')."/". $p['image']; ?>" width="150" height="150"></td>
                                     <td class="ladd<?php echo $cat['id']; ?>"><?php echo $p['sqft']; ?></td>
                                      <td class="ladd<?php echo $cat['id']; ?>"><?php echo $p['floor']; ?></td>
                                      <td class="ladd<?php echo $cat['id']; ?>"><?php echo $p['beds']; ?></td>
                                       <td class="ladd<?php echo $cat['id']; ?>"><?php echo $p['bath']; ?></td>
                                    <td><button class="btn btn-primary edit-btn" data-id="<?php echo $p['id']; ?>">Edit</button> &nbsp;&nbsp;|&nbsp;&nbsp;<button class="btn btn-danger" data-id="<?php echo $cat['id']; ?>">DELETE</button></td>
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
            $.post("<?php echo base_url('Admin/dashboard/delete_class'); ?>", {"id": id}, function (d) {
                if(d.status==200){
                    th.hide('1000');
                }
            },'json');
        } else {
            txt = "Cancel!";
        }
    });

</script>