<section class="main-content container">
    <div class="row">
        <div class="col-md-4">
            <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>
            <div class="card">
                <div class="card-heading card-default">Add Service Category</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('Admin/dashboard/add_service'); ?>" enctype="multipart/form-data">
                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" placeholder="Name" name="name" class="form-control" id="name">
                        </div>
                        <div class="form-group ">
                            <label>title</label>
                            <input type="text" placeholder="Discription" name="title" class="form-control" id="category">
                        </div>

                        <div class="form-group ">
                            <label>Upload image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-sm btn-primary AddLocation">Add Category</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-md-8">
            <div class="card">
                <div class="card-heading card-default">
                    Category
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Discription</th>
                                <th>Image</th>
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
                                    <td class="lname<?php echo $s['id']; ?>"><?php echo $s['name']; ?></td>
                                    <td class="ladd<?php echo $s['id']; ?>"><?php echo $s['title']; ?></td>
                                    <td class="ladd<?php echo $s['id']; ?>"><img src="<?php echo base_url('images') . "/" . $s['image']; ?>" height="150" width="150"></td>
                                    <td><button class="btn btn-primary edit-btn" data-id="<?php echo $s['id']; ?>">Edit</button></td>
                                </tr>
                            <?php } ?>

                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="locationModal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="fa fa-times"></span></button>
                <h5 class="modal-title" id="exampleModalLabel">Edit Location</h5>
            </div>
            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <input type="text" class="form-control location-name" value="">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control add-name" value="">
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
        var dis = $('#category').val();
        $.post("<?php echo base_url('Admin/dashboard/add_category'); ?>", {"name": name, "dis": dis}, function (d) {
            if (d.status == 200) {
                $.toast({
                    heading: 'Success !',
                    text: 'Location Add Successfully !',
                    position: 'top-right',
                    loaderBg: '#fff',
                    icon: 'success',
                    hideAfter: 3000,
                    stack: 1
                });
                $('<tr><td>#</td><td>' + name + '</td><td>' + dis + '</td><tr>').appendTo('#ListLocation');
            }
        }, 'json');
    });

    var id;
    $('.edit-btn').on("click", function () {
        $('#locationModal').modal('show');
        id = $(this).data().id;
        var name = $('.lname' + id).html();
        var dis = $('.ladd' + id).html();
        $('.location-name').val(name);
        $('.add-name').val(dis);
    });

    $('.save-change').on("click", function () {
        var cname = $('.location-name').val();
        var dis = $('.add-name').val();
        $.post("<?php echo base_url('Admin/dashboard/update_category'); ?>", {"id": id, "canme": cname, "dis": dis}, function (d) {
            if (d.status == 200) {
                $('.lname' + id).html(cname);
                $('.ladd' + id).html(dis);
                $('#locationModal').modal('hide');
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
            $.post("<?php echo base_url('Admin/dashboard/delete_location'); ?>", {"id": id}, function (d) {
                if (d.status == 200) {
                    th.hide('1000');
                }
            }, 'json');
        } else {
            txt = "Cancel!";
        }
    });

</script>