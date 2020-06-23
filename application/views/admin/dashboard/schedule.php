<section class="main-content container">

    <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-heading card-default">Schedule</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('/Admin/dashboard/add_schedule'); ?>">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Location</label>
                                    <select name="location" class="form-control m-b location">
                                        <?php foreach ($Location as $local) { ?>
                                            <option value="<?php echo $local['id']; ?>"><?php echo $local['location_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Class</label>
                                    <select name="class" class="form-control m-b">
                                        <?php foreach ($class as $cls) { ?>
                                            <option value="<?php echo $cls['id']; ?>"><?php echo $cls['class_name']; ?></option>
                                        <?php } ?>>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Hour</label>
                                    <select name="hour" class="form-control m-b">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                       
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Minute</label>
                                    <select name="miniute" class="form-control m-b">
                                        <option value="00">00</option>
                                        <option value="15">15</option>
                                        <option value="30">30</option>
                                        <option value="45">45</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select</label>
                                    <select name="status" class="form-control m-b">
                                        <option value="AM">AM</option>
                                        <option value="PM">PM</option>
                                    </select>
                                </div>
                            </div>





                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label>Class Duration</label>
                                    <input type="number" placeholder="Duration" class="form-control" name="duration" required>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group ">
                                    <label>Capacity</label>
                                    <input type="number" placeholder="Capacity" class="form-control" name="capacity" required>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Day</label>
                                    <select name="day" class="form-control m-b">
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednessday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saterday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-sm btn-primary">Schedule</button>
                    </form>
                </div>
            </div>
        </div>



        <div class="col-sm-12">
            <div class="card">
                <div class="card-heading card-default">
                    Schedule
                </div>
                <div class="card-block">
                    <table id="datatable" class="table table-striped dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Location</th>
                                <th>Class</th>
                                <th>Duration</th>
                                <th>hour</th>
                                <th>Capacity</th>
                                <th>Available</th>
                                <th>Day</th>
                                <th>Enrolled</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($schedules as $sec) { 
                                ?>
                                <tr>
                                    <td><?php echo $count++; ?></td>
                                    <td><?php echo $sec['location_name']; ?></td>
                                    <td><?php echo $sec['class_name']; ?></td>
                                    <td><?php echo $sec['duration']; ?></td>
                                    <td><?php echo $sec['hour']; ?> :<?php echo $sec['min']; ?>:<?php echo $sec['status']; ?></td>
                                    <td><?php echo $sec['capacity']; ?></td>
                                     <td><?php echo $sec['avail']; ?></td>
                                    <td><?php echo $sec['day']; ?></td>
                                    <td><button class="btn btn-success"><a class="text-white" href="<?php echo base_url('Admin/dashboard/view/'.$sec['id']);?>">View</a></button></td>
                                    <td><button class="btn btn-primary btn-sm"><a class="text-white" href="<?php echo base_url('Admin/dashboard/edit/'.$sec['id']);?>">Edit</a></button> &nbsp;&nbsp;|&nbsp;&nbsp;<button class="btn btn-danger btn-sm" data-id="<?php echo $sec['id']; ?>">DELETE</button></td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

   
</section>

<script>
    $('.btn-danger').on("click", function () {
        var id = $(this).data().id;
        var th = $(this).closest('tr');
        var r = confirm("Are you want to delete this ?");
        if (r == true) {
            $.post("<?php echo base_url('Admin/dashboard/delete_schedule'); ?>", {"id": id}, function (d) {
                if(d.status==200){
                    th.hide('1000');
                }
            },'json');
        } else {
            txt = "Cancel!";
        }
    });
</script>