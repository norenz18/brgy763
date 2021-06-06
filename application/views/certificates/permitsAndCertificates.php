<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Certificate'); ?>">PERMIT & CERTIFICATES</a></li>
        <li>
            <!-- Button trigger modal -->
            <button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
                <i id="log_out" class="fas fa-sign-out-alt"> Log out</i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div>
        </li>
    </ul>
</div>

<div class="container-fluid d-flex justify-content-around" id="main-container">

    <div class="nav-main">

        <ul>
            <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
            <li><a href="<?php echo site_url('Dashboard'); ?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
            <li><a href="<?php echo site_url('Residents/viewlist'); ?>"><i class="fas fa-users"></i> Residents</a></li>
            <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-clipboard-list"></i> Reports</a></li>
            <li><a href="<?php echo site_url('Blotter'); ?>"><i class="fas fa-book"></i> Blotter</a></li>
            <!--<i class="fas fa-print"></i>-->
            <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-scroll"></i> Certificates</a></li>
            <li><a href="<?php echo site_url('Officials'); ?>"><i class="fas fa-users-cog"></i> Officials</a></li>
        </ul>

    </div>

    <div class="container" id="certificate-section"><br><br>

        <!-- Button trigger modal -->
        &nbsp&nbsp;&nbsp;&nbsp;<button type="button" id="btn-add" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> CREATE CERTIFICATE</button>

        <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <!-- tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">CREATE CERTIFICATE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5>

                    <div class="modal-body d-flex justify-content-center">
                        <!--opening modal body-->

                        <form method="post" action="<?php echo site_url('Certificate/createCert'); ?>" enctype="multipart/form-data">

                            <div class="form-row">

                                <div class="form-group col-sm-3">
                                    <label for="category">Category</label><br>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option disabled></option>
                                        <option class="indigency" value="Indigency">Indigency</option>
                                        <option class="clearance" value="Clearance">Clearance</option>
                                        <option class="permit" value="Business-Permit">Business Permit</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">FULL NAME</label>
                                    <input type="text" class="form-control" name="fullName" id="fullName" placeholder="Enter your fullname..." value="" required>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">ADDRESS <small class="text-danger">( House # & Street name ) </small></label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="enter your address" value="" required>
                                </div>

                                <div class="form-group col-sm-5">
                                    <label for="">PURPOSE</label>
                                    <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Assistance, business, employment etc." value="" required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">DATE</label>
                                    <input type="text" class="form-control" name="date" id="date" placeholder="Month, Day, Year" value="" required>
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="">PUNONG BARANGAY</label>
                                    <input type="text" class="form-control" name="punongBrgy" id="punongBrgy" placeholder="Enter Brgy. Capt. name" value="" required> <br>
                                </div>

                                <div class="form-group col-sm-12">
                                    <h6 class="text-danger">Fill out if you are creating business permit.</h6>
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">NAME OF BUSINESS</label>
                                    <input type="text" class="form-control" name="businessName" id="businessName" placeholder="enter your business name..." value="">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">KIND OF BUSINESS</label>
                                    <input type="text" class="form-control" name="businessType" id="businessType" placeholder="Ex. 'Retail store', 'Convenience Store' etc... " value="">
                                </div>

                            </div>
                            <!--end class form col-->
                            <br>
                            <button type="submit" class="btn btn-success btn-sm" value="save"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                        </form>

                    </div>
                    <!--closing modal body-->

                </div> <!-- modal dialog -->
            </div> <!-- modal content -->
        </div><!-- end of main container -->



        <div class="container" id="table-wrapper">

            <table id="table-list" class="table table-sm table-hover table-border" data-toggle="table" data-pagination="true" data-search="true" data-search-align="left" data-show-fullscreen="true" data-pagination-pre-text="Prev" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-show-pagination-switch="true" data-page-list="[10, 25, 50, 100, ALL]">

                <thead id="thead" class="col-sm-3 text-center">

                    <tr>

                        <th scope="col" data-field="category" data-sortable="true">Category</th>
                        <th scope="col" data-field="fullName" data-sortable="true">Full Name</th>
                        <th scope="col" data-field="purpose" data-sortable="true">Purpose</th>
                        <th scope="col" data-field="Action">Action</th>

                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php foreach ($result as $setrows) : ?>
                        <tr class="text-center categories" style="font-size: 13px;">
                            <td class="text-center" style="text-transform: uppercase;"><strong><?php echo $setrows->category; ?></strong></td>
                            <td class="text-left" style="text-transform: uppercase;"><?php echo $setrows->fullName; ?></td>
                            <td class="text-center" style="text-transform: uppercase;"><?php echo $setrows->purpose; ?></td>
                            <td class="text-center"><a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Certificate/edit'); ?>/<?php echo $setrows->id; ?>"><i class="fas fa-edit"></i></a>
                                <a class="btn btn-secondary btn-sm" id="Indigency" data-toggle="tooltip" target="_blank" title="View Indigency" href="<?php echo site_url('Certificate/CreateCertPdf'); ?>/<?php echo $setrows->id; ?>"><i class="fas fa-print"> Indigency</i></a>
                                <a class="btn btn-primary btn-sm" id="Clearance" data-toggle="tooltip" target="_blank" title="View Clearance" href="<?php echo site_url('Certificate/CreateCertPdfs'); ?>/<?php echo $setrows->id; ?>"><i class="fas fa-print"> Clearance</i></a>
                                <a class="btn btn-success btn-sm" id="Business-Permit" data-toggle="tooltip" target="_blank" title="View Business Permit" href="<?php echo site_url('Certificate/CreateCertPdfPermit'); ?>/<?php echo $setrows->id; ?>"><i class="fas fa-print"> Business</i></a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!--end wrapper--> <br><br>

    </div>
    <!--end container -->
</div> <!-- end of main container -->


<?php $this->load->view('includes/footer') ?>