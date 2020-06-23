<section class="main-content container">

    <div class="text-left margin-b-2"><strong><?php echo $this->session->flashdata('item'); ?> </strong></div>

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-heading card-default">Schedule</div>
                <div class="card-block">
                    <form role="form" method="post" action="<?php echo base_url('/Admin/dashboard/update_schedule'); ?>">
                        <input type="hidden" name="id" value="<?php echo $schedule['id']; ?>">
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
                                        <option value="<?php echo $schedule['hour'];?>" selected="true"><?php echo $schedule['hour'];?></option>
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
                                         <option value="<?php echo $schedule['min'];?>" selected="true"><?php echo $schedule['min'];?></option>
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
                                         <option value="<?php echo $schedule['status'];?>" selected="true"><?php echo $schedule['status'];?></option>
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
                                    <input type="number" placeholder="Duration" value="<?php echo $schedule['duration'];?>" class="form-control" name="duration" required>
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="form-group ">
                                    <label>Capacity</label>
                                    <input type="number" placeholder="Capacity"  value="<?php echo $schedule['capacity'];?>" class="form-control" name="capacity" required>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Select Day</label>
                                    <select name="day" class="form-control m-b">
                                        <option value="<?php echo $schedule['day'];?>" selected="true"><?php echo $schedule['day'];?></option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Thusday</option>
                                        <option value="Wednessday">WednessDay</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saterday">Satarday</option>
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



     
    </div>

   
</section>

