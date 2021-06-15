<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Officials'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="">BRGY OFFICIAL</a></li>
        <li>
        </li>
    </ul>
</div><br>

<div class="container" id="editContainer">

    <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
    <br>
    <form method="post" action="<?php echo site_url('Officials/updateOfficials') ?>/<?php echo $setrows->id; ?>" enctype="multipart/form-data">


        <div class="form-row">

            <div class="form-group col-sm-12">

                <img class="profileImg" id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $setrows->profImage; ?>">&nbsp;
                <label for="">
                    <sub>You still need to upload photo if you're editing information.
                        Press <span class="text-danger">CANCEL </span> if no changes occurs and exit. <br></sub> <br>
                    <input type="file" name="userfile" style="cursor:pointer;" value="<?php echo site_url('img'); ?>/<?php echo $setrows->profImage; ?>" accept="image/*" size="20" required></label>
            </div>

            <div class="form-group col-sm-4">
                <label for="">Full Name</label>
                <input type="text" class="form-control" name="fullname" value="<?php echo $setrows->fullname; ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label for="Position">Position</label><br>
                <select class="form-control" id="role" name="role" value="<?php echo $setrows->role; ?>" required>
                    <option><?php echo $setrows->role; ?></option>
                    <option disabled>----------</option>
                    <option value="Barangay Captain">Barangay Captain</option>
                    <option value="Kagawad">Kagawad</option>
                    <option value="Sangguniang Kabataan Chairperson">Sanggunian Kabataan Chairperson</option>
                    <option value="Secretary">Secretary</option>
                    <option value="Treasurer">Treasurer</option>
                </select>
            </div> <br><br>

            <div class="form-group col-sm-6">
                <label for="chairmanship">Chairmanship</label><br>
                <select class="form-control" id="chairmanship" name="chairmanship" value="<?php echo $setrows->chairmanship; ?>" required>
                    <option><?php echo $setrows->chairmanship; ?></option>
                    <option disabled>----------</option>
                    <option value="Presiding Officer">Presiding Officer</option>
                    <option value="Committee on Appropriations">Appropriations</option>
                    <option value="Committee on Risk Reduction">Risk Reduction</option>
                    <option value="Committee on Elderly People">Elderly People</option>
                    <option value="Committee on Peace & Order">Peace & Order</option>
                    <option value="Committee on Health, Social Services & Sanitation">Health, Social Services & Sanitation</option>
                    <option value="Committee on Education, Cultural Affairs & Tourism">Education, Cultural Affairs & Tourism</option>
                    <option value="Committee on Justice & Human Rights">Justice & Human Rights</option>
                    <option value="Committee on Public works & Infrastructure">Public works & Infrastructure</option>
                    <option value="Committee on Solid Waste Management">Solid Waste Management</option>
                    <option value="Committee on Youth & Sport Development">Youth & Sport Development</option>
                    <option value="Committee on Transportation, Communication & Public Service">Transportation, Communication & Public Service</option>
                    <option value="Committee on Women, Family Senior Citizens & Minors">Women, Family Senior Citizens & Minors</option>
                    <option value="Committee on Livelihood & Job Employment">Livelihood & Job Employment</option>
                    <option value="No Declared Chairmanship">- No Declared Chairmanship </option>
                </select>
            </div>


        </div>
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
        <a href="<?php echo site_url('Officials') ?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    </form>
</div>

<?php $this->load->view('includes/footer'); ?>