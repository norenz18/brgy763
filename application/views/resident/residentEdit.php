<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Residents/viewlist'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="<?php echo site_url(''); ?>">RESIDENTS</a></li>
        <li><a href="<?php echo site_url('welcome'); ?>">Log out</a></li>
    </ul>
</div><br>

<div class="container" id="editContainer">

    <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
    <form method="post" action="<?php echo site_url('Residents/update') ?>/<?php echo $row->id; ?>" enctype="multipart/form-data">
        <!--  enctype="multipart/form-data" -->
        <div class="form-row">

            <div class="form-group col-sm-12">

                <img class="profileImg" id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>"> &nbsp;
                <label for="">Upload Image <br>
                    <sub>You still need to upload photo if you're editing information.
                        Press <span class="text-danger">CANCEL </span> if no changes occurs and exit. <br></sub> <br><input type="file" name="userfile" style="cursor:pointer;" value="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>" size="20" required></label>

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
                <input type="text" class="form-control" name="mi" value="<?php echo $row->mi; ?>">
            </div>

            <div class="form-group col-sm-2">
                <label for="">Contact</label>
                <input type="number" class="form-control" id="contact" name="contact" value="<?php echo $row->contact; ?>" required>
            </div>

            <div class="form-group col-sm-2">
                <label for="birthdate">Birthdate: <small style="color: red;">Mm/Dd/Yy</small></label>
                <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Mm/Dd/Yr" value="<?php echo $row->birthdate; ?>" required>
            </div>

            <div class="form-group col-sm-1">
                <label for="">Age</label>
                <input type="number" class="form-control" name="age" id="age" value="<?php echo $row->age; ?>" readonly required>
            </div>

            <div class="form-group col-sm-2">
                <label for="">Senior Citizen:</label>
                <input type="text" class="form-control" name="seniorCitizen" id="seniorCitizen" onclick="pressed()" value="<?php echo $row->seniorCitizen; ?>" readonly required>
            </div>


            <!-- <div class="form-group col-sm-1">
                        <label for="">Age</label>
                        <input type="number" class="form-control" name="age" value="<?php echo $row->age; ?>" required>
                    </div> -->

            <div class="form-group col-sm-2">
                <label for="civilStatus">Civil Status</label><br>
                <select class="form-control" id="civilStatus" name="civilStatus" value="<?php echo $row->civilStatus; ?>">
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
                <select class="form-control" id="pwd" name="pwd" value="<?php echo $row->pwd; ?>">
                    <option><?php echo $row->pwd; ?></option>
                    <option disabled>---</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <div class="form-group col-sm-3">
                <label for="">Address <small style="color: red;">House No./Street Name</small></label>
                <input type="text" class="form-control" name="address" id="address" placeholder="House No. Street Name" value="<?php echo $row->address; ?>" required>
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

        </div>
        <!--end class form row-->
        <br>
        <button type="submit" class="btn btn-primary btn-sm" value="save"><i class="fas fa-save"></i> Save</button>
        <a href="<?php echo site_url('Residents/viewlist') ?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>