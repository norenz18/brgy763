<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('BlotterController');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="">BLOTTER RECORDS</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>">Log out</a></li>
                    </ul>       
                </div><br>

    <div class="container" id="editContainer">

      <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
      <br>
      <form method="post" action="<?php echo site_url('BlotterController/updateBlotter')?>/<?php echo $setrows->id; ?>"> <!--  enctype="multipart/form-data" -->
         
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
                                   <input type="text" class="form-control" name="compResident" value="<?php echo $setrows->compResident; ?>" >
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
                                       <option value="File to Action">File to Action</option>
                                   </select>
                               </div><br><br>

                               <div class="form-group col-lg-10">
                                   <label for="status">Descriptions*</label><br>
                                   <textarea class="form-control" id="textArea" resize="none" name="textArea" rows="10" cols="100" placeholder="Blotter Descriptions" required><?php echo $setrows->textArea; ?></textarea>
                               </div>   


                           </div>
                           <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
                           <a href="<?php echo site_url('BlotterController')?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
      </form>
    </div>

    <?php $this->load->view('includes/footer'); ?>
