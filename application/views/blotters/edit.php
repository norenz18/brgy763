<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Blotter'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="">BLOTTER RECORDS</a></li>
        <li>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
                <i id="log_out" class="fas fa-sign-out-alt"> Log out</i>
            </button> -->

            <!-- Modal -->
            <!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Log Out</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to
                            <span class="text-danger"> Log out? </span>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                            <a type="button" class="btn btn-danger btn-sm" style="font-size: 13px;" href="<?php echo site_url('welcome'); ?>">Log Out</a>
                        </div>
                    </div>
                </div>
            </div> -->
        </li>
    </ul>
</div><br>

<div class="container" id="editContainer">

    <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
    <br>
    <form method="post" action="<?php echo site_url('Blotter/updateBlotter') ?>/<?php echo $setrows->id; ?>">
        <!--  enctype="multipart/form-data" -->

        <div class="form-row">

            <div class="form-group col-sm-2">
                <label for="">Case No.*</label>
                <input type="text" class="form-control" name="caseNo" value="<?php echo $setrows->caseNo; ?>" required>
            </div>

            <div class="form-group col-sm-3">
                <label for="">Complainant*</label>
                <input type="text" class="form-control" name="complainant" value="<?php echo $setrows->complainant; ?>" required>
            </div>

            <div class="form-group col-sm-3">
                <label for="">Complained Resident*</label>
                <input type="text" class="form-control" name="compResident" value="<?php echo $setrows->compResident; ?>">
            </div>

            <div class="form-group col-sm-2">
                <label for="">Date of Filing*</label>
                <input type="date" class="form-control" name="dateOfFiling" value="<?php echo $setrows->dateOfFiling; ?>" required>
            </div>

            <div class="form-group col-sm-2">
                <label for="">Person-in-Charge*</label>
                <input type="text" class="form-control" name="pic" value="<?php echo $setrows->pic; ?>" required>
            </div>

            <div class="form-group col-sm-2">
                <label for="status">Status*</label><br>
                <select class="form-control" id="status" name="status" value="<?php echo $setrows->status; ?>" required>
                    <option><?php echo $setrows->status; ?></option>
                    <option value=""></option>
                    <option value="Pending">Pending</option>
                    <option value="On-going">On-going</option>
                    <option value="Resolved">Resolved Issue</option>
                </select>
            </div><br><br>

            <div class="form-group col-lg-10">
                <label for="status">Descriptions*</label><br>
                <textarea class="form-control" id="textArea" resize="none" name="textArea" rows="10" cols="100" placeholder="Blotter Descriptions" required><?php echo $setrows->textArea; ?></textarea>
            </div>


        </div>
        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
        <a href="<?php echo site_url('Blotter') ?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
    </form>
</div>

<?php $this->load->view('includes/footer'); ?>