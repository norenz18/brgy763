<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Residents/viewlist'); ?>">RESIDENTS</a></li>
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

    <div class="container" id="resident-section"><br><br>

        <!-- Button trigger modal -->
        &nbsp&nbsp;&nbsp;&nbsp;<button type="button" style="margin-bottom: 10px;" id="btn-add" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> ADD RESIDENT</button>

        <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <!-- tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" -->
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">ADD RESIDENT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5>
                    <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;It will determine the <b>Senior's status</b> if the age is 60 yrs old and above based on his/her birthdate.</small></h5>

                    <div class="modal-body">
                        <!--opening modal body-->

                        <form method="post" action="<?php echo site_url('Residents/create') ?>" enctype="multipart/form-data" onsubmit="return pressed()">

                            <div class="form-group">

                                <div class="form-group col-md-12">
                                    <label for="">Upload Image</label> <br>
                                    <input type="file" name="userfile" id="profImage" accept="image/*" size="20">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">ID Number: <small class="text-danger">Fill out he/she is a<b>Solo parent, PWD or Senior Citizen</b> </small></label>
                                    <input type="text" class="form-control" name="id_number" placeholder="Enter ID number">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">First Name:</label>
                                    <input type="text" class="form-control" name="firstName" placeholder="Enter your firstname" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Last Name: <small class="text-danger">(Include suffix if exist)</small></label>
                                    <input type="text" class="form-control" name="lastName" placeholder="Enter your lastname" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">M.I.</label>
                                    <input type="text" class="form-control" name="mi" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" maxlength="2" placeholder="Mi.">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="birthdate">Birthdate: <small class="text-danger">Choose a <b>MONTH</b> first, then choose a <b>YEAR</b> and lastly select a <b>DAY</b>.</small></label>
                                    <input type="text" class="form-control" name="birthdate" id="birthdate" placeholder="Month / Day / Year" required>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Age:</label>
                                    <input type="number" class="form-control" name="age" id="age" onmouseover="press()" readonly required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="civilStatus">Civil Status:</label><br>
                                    <select class="form-control" id="civilStatus" name="civilStatus" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Solo Parent">Solo Parent</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Contact:</label>
                                    <input type="number" id="contact" name="contact" class="form-control" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==11) return false;" placeholder="Enter your number" required>
                                    <!-- <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==4) return false;" /> -->
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Person with Disability:</label>
                                    <select id="" class="form-control" id="pwd" name="pwd" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Address: <small class="text-danger">House No./Street Name</small></label>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="House No. Street Name" required>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Registered Voter?</label><br>
                                    <select id="" class="form-control" id="voterStatus" name="voterStatus" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Gender:</label><br>
                                    <select id="" class="form-control" id="gender" name="gender" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-12" style="opacity: 0">
                                    <label for="">Senior Citizen:</label>
                                    <input type="text" class="form-control" name="seniorCitizen" id="seniorCitizen" readonly required>
                                </div>


                            </div><br>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>

                        </form>
                    </div>
                    <!--end of modal body-->

                </div>
            </div>
        </div><!-- end of modal -->

        <div class="container-fluid table-wrapper-scroll-y" id="table-wrapper">
            <table id="table-list" class="table table-sm table-hover table-striped" data-toggle="table" data-pagination="true" data-search="true" data-search-align="left" data-show-fullscreen="true" data-pagination-pre-text="Prev" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-show-pagination-switch="true" data-page-list="[10, 25, 50, 100, ALL]">

                <thead id="thead" class="col-sm-3 text-center">

                    <tr>
                        <!-- <th scope="col" >View</th> -->
                        <th scope="col" data-field="Image" data-sortable="false" data-switchable="false">Image</th>
                        <th scope="col" data-field="Name" data-sortable="true" data-switchable="false">Name <span><small>(Firstname, Mi, Lastname)</small></span></th>

                        <th scope="col" data-field="Address" data-sortable="true">Address</th>
                        <th scope="col" data-field="Age" data-sortable="true">Age</th>
                        <th scope="col" data-field="Senior" data-sortable="true">Senior</th>
                        <!-- <th scope="col" data-field ="Gender" data-sortable="true">Gender</th> -->
                        <th scope="col" data-field="Voter" data-sortable="true">Voter</th>
                        <th scope="col" data-field="Action">Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php foreach ($result as $row) : ?>
                        <tr>

                            <td id="profileImgs"><img id="profileImgs" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>"></td>
                            <td class="text-left" id="fml"><?php echo $row->firstName; ?> <?php echo $row->mi; ?> <?php echo $row->lastName; ?></td>
                            <td class="text-left" id="adrs"><?php echo $row->address; ?> Brgy. 763 Zone 83, Manila</td>
                            <td class="text-center"><?php echo $row->age; ?></td>
                            <td class="text-center"><?php echo $row->seniorCitizen; ?></td>
                            <!-- <td class="text-center"><?php echo $row->gender; ?></td> -->
                            <td class="text-center"><?php echo $row->voterStatus; ?></td>
                            <td class="text-center">

                                <a class="btn btn-success btn-sm" data-toggle="tooltip" title="View details" href="<?php echo site_url('Residents/read'); ?>/<?php echo $row->id; ?>"> <i class="fas fa-eye"></i></a>
                                <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Residents/edit'); ?>/<?php echo $row->id; ?>"><i class="fas fa-edit"></i></a>
                                <!-- <a class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete details" href="<?php echo site_url('Residents/delete'); ?>/<?php echo $row->id; ?> "><i class="fas fa-trash-alt"></i></a> -->

                            </td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!--end wrapper--> <br><br>
    </div>
    <!--end container -->
</div>



<?php $this->load->view('includes/footer') ?>