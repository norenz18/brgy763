<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="">BRGY OFFICIAL</a></li>
                        <li><a href="<?php echo site_url('welcome'); ?>">Log out</a></li>
                    </ul>       
                </div><br>

<div class="container" id="editContainer">

      <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
      <br>
      <form method="post" action="<?php echo site_url('Officials/updateOfficials')?>/<?php echo $setrows->id; ?>"> <!--  enctype="multipart/form-data" -->
         
            <div class="form-row">

                                <div class="form-group col-sm-3">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="firstname" value="<?php echo $setrows->firstname; ?>" required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Last Name <small>(Suffix)</small></label>
                                    <input type="text" class="form-control" name="lastname" value="<?php echo $setrows->lastname; ?>"  required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Middle Name or Initial</label>
                                    <input type="text" class="form-control" name="middlename" value="<?php echo $setrows->middlename; ?>"  >
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="chairmanship">Chairmanship</label><br>
                                    <select class="form-control" id="chairmanship" name="chairmanship" value="<?php echo $setrows->chairmanship; ?>" required>
                                        <option><?php echo $setrows->chairmanship; ?></option>
                                        <option disabled>----------</option>
                                        <option value="Presiding Officer">Presiding Officer</option>
                                        <option value="Committee on Appropriation">Appropriation</option>
                                        <option value="Committee on Peace & Order">Peace & Order</option>
                                        <option value="Committee on Health">Health</option>
                                        <option value="Committee on Education">Education</option>
                                        <option value="Committee on Rules">Rules</option>
                                        <option value="Committee on Infra">Infra</option>
                                        <option value="Committee on Solid Waste">Solid Waste</option>
                                        <option value="Committee on Sports">Sport</option>
                                        <option value="No Declared Chairmanship">- No Declared Chairmanship </option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="Position">Position</label><br>
                                    <select class="form-control" id="role" name="role" value="<?php echo $setrows->role; ?>" required>
                                        <option><?php echo $setrows->role; ?></option>
                                        <option disabled>----------</option>
                                        <option value="Punong Barangay">Punong Barangay</option>
                                        <option value="Kagawad">Kagawad</option>
                                        <option value="Sk Chairman">Sk Chairman</option>
                                        <option value="Secretary">Secretary</option>
                                        <option value="Treasurer">Treasurer</option>       
                                    </select>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="rank">Rank</label><br>
                                    <select class="form-control" id="rank" name="rank" value="<?php echo $setrows->rank; ?>" required>
                                        <option><?php echo $setrows->rank; ?></option>
                                        <option disabled>----------</option>
                                        <option value="1">1 - Punong Barangay</option>
                                        <option value="2">2 - Kagawad</option>
                                        <option value="3">3 - Kagawad</option>
                                        <option value="4">4 - Kagawad</option>
                                        <option value="5">5 - Kagawad</option>
                                        <option value="6">6 - Kagawad</option>
                                        <option value="7">7 - Kagawad</option>
                                        <option value="8">8 - Kagawad</option>
                                        <option value="9">9 - Sk Chairman</option>
                                        <option value="10">10 - Secretary</option>
                                        <option value="11">11 - Treasurer</option>
                                    </select>
                                </div>



            </div>
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
                    <a href="<?php echo site_url('Officials')?>"><button type="button" class="btn btn-secondary btn-sm">Cancel</button></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                                                    <i class="fas fa-trash-alt"> Delete</i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Delete Brgy. Official</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            This action can cause deleting information of a Brgy. Official <br>
                                                            Are you sure you want to delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                            
                                                            <a class="btn btn-danger btn-sm" data-toggle="tooltip" id="dltbtn" title="Delete details" href="<?php echo site_url('Officials/deleteOfficial');?>/<?php echo $setrows->id;?> "><i class="fas fa-trash-alt"></i> Delete</a>
      
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                 
                        </form>
</div>

    <?php $this->load->view('includes/footer'); ?>
