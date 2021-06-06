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
                <input type="text" class="form-control" name="date" id="date" value="<?php echo $setrows->date; ?>" required>
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


      <div class="container note-detail">

        <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
            <i class="fas fa-trash-alt"> Delete</i>
        </button> -->

<!-- Modal -->
<!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Delete Certificate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        This action can cause deleting information of a resident. <br>
                        <span class="text-danger"> This is cannot be undone. </span><br>
                        Are you sure you want to delete?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <a class="btn btn-danger btn-sm" data-toggle="tooltip" id="dltbtn" title="Delete details" href="<?php echo site_url('Certificate/delete'); ?>/<?php echo $setrows->id; ?> "><i class="fas fa-trash-alt"></i> Delete

                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div> -->
<!-- note-detail -->