<?php $this->load->view('includes/header'); ?>

                <div   div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>">RESIDENTS</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>">Log out</a></li>
                    </ul>       
                </div><br>

    <div class="container" id="editContainer">

      <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
      <br>
      <form method="post" action="<?php echo site_url('CrudController/update')?>/<?php echo $row->id; ?>"> <!--  enctype="multipart/form-data" -->
            <div class="form-row">

                    <!-- <div class="form-group col-sm-3">
                        <label for="">Upload Image</label>
                        <input type="file" name="userfile" size="20">
                    </div> -->

                    <div class="form-group col-sm-3">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lastName" value="<?php echo $row->lastName; ?>" required>
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="firstName" value="<?php echo $row->firstName; ?>" required>
                    </div>

                    <div class="form-group col-sm-1">
                        <label for="">M.I.</label>
                        <input type="text" class="form-control" name="mi" value="<?php echo $row->mi; ?>" required>
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="">Birthdate</label>
                        <input type="date" class="form-control" name="birthdate" value="<?php echo $row->birthdate; ?>" required>
                    </div>

                    <div class="form-group col-sm-2">
                        <label for="">Contact</label>
                        <input type="number" class="form-control" name="contact" value="<?php echo $row->contact; ?>" required>
                    </div>

                    <div class="form-group col-sm-1">
                        <label for="">Age</label>
                        <input type="number" class="form-control" name="age" value="<?php echo $row->age; ?>" required>
                    </div>

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
                      
                      <label for="">Voter Status</label><br>
                      <input type="radio" id="voterStatus" name="voterStatus" value="Yes" required>
                      <label for="">Yes</label><br>
                      <input type="radio" id="voterStatus" name="voterStatus" value="No" required>
                      <label for="">No</label><br>
                      
                    </div>

                    <div class="form-group col-sm-2">
                    <label for="male">Gender</label><br>
                        <input type="radio" id="gender" name="gender" value="Male" required>
                        <label for="male">Male</label><br>
                        <input type="radio" id="gender" name="gender" value="Female" required>
                        <label for="female">Female</label><br>
                    </div>

            </div><!--end class form row-->
            <br><br>
            <button type="submit" onclick="myFunctionbtn()" class="btn btn-primary btn-sm" value="save"><i class="fas fa-save"></i> Save</button>
            <a href="<?php echo site_url('CrudController/viewlist')?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
      </form>
    </div>

    <?php $this->load->view('includes/footer'); ?>
