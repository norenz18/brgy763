<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="" class="text-center">PERMITS & CERTIFICATES</a></li>
        <li> </li>

    </ul>
</div><br>

<div class="container" id="editContainer">

    <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
    <br>


    <form method="post" action="<?php echo site_url('Certificate/updateCerts') ?>/<?php echo $setrows->id; ?>">
        <!--  enctype="multipart/form-data" -->

        <div class="form-row">

            <div class="form-group col-sm-3">
                <label for="category">Category</label><br>
                <select class="form-control" name="category" id="category" value="<?php echo $setrows->category; ?>">
                    <option><?php echo $setrows->category; ?></option>
                    <option disabled>---</option>
                    <option class="" value="Indigency">Indigency</option>
                    <option class="" value="Clearance">Clearance</option>
                    <option class="" value="Business-Permit">Business Permit</option>
                </select>
            </div>

            <div class="form-group col-sm-4">
                <label for="">FULL NAME</label>
                <input type="text" class="form-control" name="fullName" id="fullName" value="<?php echo $setrows->fullName; ?>" required> <!--  -->
            </div>

            <div class="form-group col-sm-4">
                <label for="">ADDRESS <small class="text-danger">(House # / Street name) </small></label>
                <input type="text" class="form-control" name="address" id="address" value="<?php echo $setrows->address; ?>" required>
            </div>

            <div class="form-group col-sm-5">
                <label for="">PURPOSE</label>
                <input type="text" class="form-control" name="purpose" id="purpose" value="<?php echo $setrows->purpose; ?>" required>
            </div>

            <div class="form-group col-sm-3">
                <label for="">DATE</label>
                <input type="date" class="form-control" name="dateOfcert" id="dateOfcert" value="<?php echo $setrows->dateOfcert; ?>" required>
            </div>

            <div class="form-group col-sm-4">
                <label for="">PUNONG BARANGAY</label>
                <input type="text" class="form-control" name="punongBrgy" id="punongBrgy" value="<?php echo $setrows->punongBrgy; ?>" required> <br>
            </div>

            <div class="form-group col-sm-12">
                <h6 class="text-danger">Fill out if you're creating business permit.</h6>
            </div>

            <div class="form-group col-sm-6">
                <label for="">NAME OF BUSINESS</label>
                <input type="text" class="form-control" name="businessName" id="businessName" value="<?php echo $setrows->businessName; ?>">
            </div>

            <div class="form-group col-sm-6">
                <label for="">KIND OF BUSINESS</label>
                <input type="text" class="form-control" name="businessType" id="businessType" value="<?php echo $setrows->businessType; ?>">
            </div>

        </div>
        <!--end class form col-->
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
        <a href="<?php echo site_url('Certificate') ?>"><button type="button" class="btn btn-secondary btn-sm">Cancel</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <a class="btn btn-danger btn-sm" data-toggle="tooltip" id="dltbtn" title="Delete details" href="<?php echo site_url('Certificate/delete'); ?>/<?php echo $setrows->id; ?> "><i class="fas fa-trash-alt"></i> Delete </a>

    </form>

</div>
<!-- container

    <?php $this->load->view('includes/footer'); ?>


   