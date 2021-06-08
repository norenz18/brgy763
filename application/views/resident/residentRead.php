<?php $this->load->view('includes/header'); ?>

<?php { ?>

    <div class="main-content" id="resident-info">

        <div class="nav">
            <ul>
                <li><a href="<?php echo site_url('Residents/viewlist'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                <li><a href="">RESIDENT INFORMATION</a></li>
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
                    </div>
                </li> -->

            </ul>
        </div>
        <br>

        <div class="container note-detail">
            <h6 class="text-danger">Note: Make sure all the information that shows below are correct. </h6>
            <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Residents/edit'); ?>/<?php echo $row->id; ?> "><i class="fas fa-edit"></i><b> Edit</b></a>&nbsp;
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-trash-alt"> Delete</i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Delete Resident</h5>
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
                            <a class="btn btn-danger btn-sm" data-toggle="tooltip" id="dltbtn" title="Delete details" href="<?php echo site_url('Residents/delete'); ?>/<?php echo $row->id; ?> "><i class="fas fa-trash-alt"></i> Delete

                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div> <!-- note-detail -->

        <div class="container d-flex justify-content-evenly" id="div-content">

            <div class="resPic">
                <img id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>">
            </div>

            <ul id="resProfile">

                <img id="resProfileImg" src="<?php echo site_url('img/logomanila2.png'); ?>" alt="">


                <li><strong>First Name:</strong> <span> <?php echo $row->firstName; ?></span></li>
                <li><strong>Last Name:</strong> <span> <?php echo $row->lastName; ?></span></li>
                <li><strong>M.I. :</strong> <span> <?php echo $row->mi; ?></span></li>
                <li><strong>Contact:</strong> <span> (0)<?php echo $row->contact; ?></span></li>
                <li><strong>Address:</strong> <span> <?php echo $row->address; ?> Brgy. 763 zone 83, Manila</span></li>
                <li><strong>Age:</strong> <span> <?php echo $row->age; ?></span></li>
                <li><strong>Senior Citizen:</strong> <span> <?php echo $row->seniorCitizen; ?></span></li>
                <li><strong>Voter Status:</strong> <span> <?php echo $row->voterStatus; ?></span></li>
                <li><strong>Gender:</strong> <span> <?php echo $row->gender; ?></span></li>
                <li><strong>Civil Status:</strong> <span> <?php echo $row->civilStatus; ?></span></li>
                <li><strong>Birthdate:</strong> <span> <?php echo $row->birthdate; ?></span></li>
                <li><strong>Person with Disability:</strong> <span> <?php echo $row->pwd; ?></span></li>
            </ul>

        </div>


    </div><!-- END OF MAIN CONTENT -->
<?php }  ?>
<br><br>

<?php $this->load->view('includes/footer'); ?>