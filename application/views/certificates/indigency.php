<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CertificateController');?>">PERMIT & CERTIFICATES</a></li>
                        <li><a href="<?php echo site_url('welcome'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>       
                </div>

                <div class="container-fluid d-flex justify-content-around" id="main-container">

                            <div class="nav-main">

                                    <ul>
                                        <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
                                        <li><a href="<?php echo site_url('CrudController');?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-users"></i> Residents</a></li>
                                        <li><a href="<?php echo site_url('PostsController');?>"><i class="fas fa-clipboard-list"></i> Incident Report</a></li>
                                        <li><a href="<?php echo site_url('BlotterController');?>"><i class="fas fa-book"></i> Blotter</a></li> 
                                        <li><a href="<?php echo site_url('CertificateController'); ?>"><i class="fas fa-scroll"></i> Permits&Certs.</a></li>                                      
                                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-users-cog"></i> Officials</a></li>          
                                    </ul>

                            </div>

                        <div class="container"><br><br>

                        <h6 class="text-danger">Note: Editing details can cause misleading information, make sure all the details are correct and valid.</h6>
      <br>
      <form method="post" action="<?php echo site_url('CertificateController/createCert');?>" enctype="multipart/form-data">
            <div class="form-row">

                    <div class="form-group col-sm-4">
                        <label for="">FULL NAME</label>
                        <input type="text" class="form-control" name="fullName" id="fullName" value="" required> <!--  -->
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="">Address</label>
                        <input type="text" class="form-control" name="address" id="address" value="" required> <!-- <?php echo $row->address; ?>  -->
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="">PURPOSE</label>
                        <input type="text" class="form-control" name="purpose" id="purpose" value="" required> <!-- <?php echo $row->purpose; ?>  -->
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">DATE</label>
                        <input type="text" class="form-control" name="date" id="date" value="" required> <!-- <?php echo $row->date; ?>  -->
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="">PUNONG BARANGAY</label>
                        <input type="text" class="form-control" name="punongBrgy" id="punongBrgy" value="" required> <!-- <?php echo $row->punongBrgy; ?> -->
                    </div>

            </div><!--end class form row-->
            <br><br>
            <button type="submit" class="btn btn-primary btn-sm" value="save"><i class="fas fa-save"></i> Save</button>
                <!-- <a class="btn btn-success btn-sm" data-toggle="tooltip" target="__blank"  title="View details" href="<?php echo site_url('Certificate/indigencyPdf'); ?>/<?php echo $row->id; ?>"><i class="fas fa-print"></i></a> -->
            <a href="<?php echo site_url('CertificateController')?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>
      </form>
                        
                      
                        </div><!--end container -->
                </div> <!-- end of main container -->


<?php $this->load->view('includes/footer') ?>
      