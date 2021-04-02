<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>">RESIDENTS</a></li>
                        <li><a href="<?php echo site_url('welcome'); ?>">Log out</a></li>
                    </ul>       
                </div><br>

    <div class="container" id="editContainer">

      <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
      <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>" enctype="multipart/form-data"> <!--  enctype="multipart/form-data" -->
            <div class="form-row">

                    <!-- <div class="form-group col-sm-2">
                        <img class="profileImg" id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>">
                        <label for="">Resident Image</label> -->
                        <!-- <input type="file" name="userfile" size="20"> -->
                    <!-- </div> -->

                    <div class="form-group col-sm-12">
                       
                        <img class="profileImg" id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>">&nbsp;
                        <label for="">Upload Image <br><input type="file" name="userfile" value="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>" size="20" required></label>
                                    <!-- <video src="" id="video" width="300" height="300" autoplay></video>
                                    <button id="snap">Take Photo</button>
                                    <canvas id="canvas" width="300" height="300"></canvas> -->
                                    
                                    <!-- <div id="my_camera"></div>
                                    <br/>
                                    <input type=button value="Take Snapshot" onClick="take_snapshot()">
                                    <input type="hidden" name="image"  class="image-tag">

                                    <div id="profImage">Your captured image will appear here...</div> -->

                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" required>
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">Last Name <small>(Suffix)</small></label>
                        <input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" required>
                    </div>

                    <div class="form-group col-sm-1">
                        <label for="">M.I.</label>
                        <input type="text" class="form-control" name="mi" value="<?php echo $row->mi; ?>" >
                    </div>

                    <!-- <div class="form-group col-sm-2">
                        <label for="">Birthdate</label>
                        <input type="date" class="form-control" name="birthdate" value="<?php echo $row->birthdate; ?>" required>
                    </div> -->

                    <div class="form-group col-sm-2">
                        <label for="">Contact</label>
                        <input type="number" class="form-control" name="contact" value="<?php echo $row->contact; ?>" required>
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="birthdate">Birthdate: <small>Mm/Dd/Yy</small></label>
                        <input type="text" class="form-control" name="birthdate" id="birthdate" value="<?php echo $row->birthdate; ?>" required>
                    </div>
                                
                    <div class="form-group col-sm-1">
                        <label for="">Age</label>
                        <input type="number" class="form-control" name="age" id="age"  value="<?php echo $row->age; ?>" readonly required>
                    </div>


                    <!-- <div class="form-group col-sm-1">
                        <label for="">Age</label>
                        <input type="number" class="form-control" name="age" value="<?php echo $row->age; ?>" required>
                    </div> -->

                    <div class="form-group col-sm-2">
                        <label for="civilStatus">Civil Status</label><br>
                        <select class="form-control" id="civilStatus" name="civilStatus"  value="<?php echo $row->civilStatus; ?>">
                            <option><?php echo $row->civilStatus; ?></option>
                            <option disabled>---</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                            <option value="Widowed">Widowed</option>
                            <option value="Solo Parent">Solo Parent</option>
                            <option value="Divorced">Divorced</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="">Pers W/ Dis.</label>
                        <select class="form-control" id="pwd" name="pwd"  value="<?php echo $row->pwd; ?>">
                            <option><?php echo $row->pwd; ?></option>
                            <option disabled>---</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="<?php echo $row->address; ?>" required>
                    </div>
      
                    <div class="form-group col-sm-2">
                                    <label for="">Registered Voter?</label><br>
                                    <select id="" class="form-control" id="voterStatus" name="voterStatus" value="<?php echo $row->voterStatus; ?>" required>
                                        <option><?php echo $row->voterStatus; ?></option>
                                        <option disabled>---</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Gender</label><br>
                                    <select id="" class="form-control" id="gender" name="gender" value="<?php echo $row->gender; ?>" required>
                                        <option><?php echo $row->gender; ?></option>
                                        <option disabled>---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

            </div><!--end class form row-->
            <br><br>
            <button type="submit" onclick="myFunctionbtn()" class="btn btn-primary btn-sm" value="save"><i class="fas fa-save"></i> Save</button>
            <a href="<?php echo site_url('CrudController/viewlist')?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
      </form>
    </div>

    <?php $this->load->view('includes/footer'); ?>
