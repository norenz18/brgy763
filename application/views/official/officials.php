<?php $this->load->view('includes/header'); ?>


<div class="nav">
    <ul>

        <li><a href="<?php echo site_url('Officials'); ?>">BRGY. OFFICIALS</a></li>
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

    <div class="container"><br><br>

        <!-- Button trigger modal -->
        &nbsp&nbsp;&nbsp;&nbsp;<button type="button" id="btn-add" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> BRGY. OFFICIAL</button>

        <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-info" id="exampleModalLabel">BRGY OFFICIAL</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                    <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5>

                    <div class="modal-body">
                        <!--opening modal body-->

                        <form method="post" action="<?php echo site_url('Officials/createOfficials') ?>" enctype="multipart/form-data">


                            <div class="form-row">

                                <div class="form-group col-sm-8">
                                    <label for="">Upload Image</label> <br>
                                    <input type="file" name="userfile" id="profImage" accept="image/*" size="20">
                                </div>

                                <div class="form-group col-sm-6">
                                    <label for="">Full Name</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter your Name" required>
                                </div>

                                <div class="form-group col-sm-5">
                                    <label for="Position">Position</label><br>
                                    <select class="form-control" id="role" name="role" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
                                        <option value="Barangay Captain">Barangay Captain</option>
                                        <option value="Kagawad">Kagawad</option>
                                        <option value="Sangguniang Kabataan Chairperson">Sanggunian Kabataan Chairperson</option>
                                        <option value="Secretary">Secretary</option>
                                        <option value="Treasurer">Treasurer</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-7">
                                    <label for="chairmanship">Chairmanship</label><br>
                                    <select class="form-control" id="chairmanship" name="chairmanship" required>
                                        <option value="" disabled selected>-- Select --</option>
                                        <option value="" disabled></option>
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
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>

                        </form> <!-- end of form -->

                    </div>
                    <!--end of modal body-->

                </div>
            </div>
        </div><!-- end of modal -->

        <div class="container-fluid" id="table-wrapper">
            <table id="table-list" class="table table-sm table-hover table-striped" data-toggle="table" data-pagination="false" data-search="true" data-search-align="left" data-show-fullscreen="true" data-pagination-pre-text="Prev" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-show-pagination-switch="true" data-page-list="[10, 25, 50, 100, ALL]">

                <thead id="thead" class="col-sm-3 text-center">

                    <tr>
                        <th scope="col-sm-3" class="col-sm-3 text-center">Image</th> <!-- data-field ="firstname" data-sortable="true" -->
                        <th scope="col-sm-3" class="col-sm-3 text-center">Full Name <small>(First Name, M.Name/Initial, Last Name)</small></th> <!-- data-field ="firstname" data-sortable="true" -->
                        <th scope="col-sm-3" class="col-sm-3 text-center">Role</th> <!-- data-field ="role" data-sortable="true" -->
                        <!-- <th scope="col-sm-3" class="col-sm-3 text-center" >Position</th> data-field ="role" data-sortable="true" -->
                        <!--   <th scope="col-sm-3" class="col-sm-3 text-center" >Rank</th> data-field ="rank" data-sortable="true" -->
                        <th scope="col-sm-1">Action</th>
                    </tr>
                </thead>
                <tbody id="tbody">

                    <?php foreach ($result as $setrows) : ?>
                        <tr>

                            <td id="officialImage"><img id="officialImage" src="<?php echo site_url('img'); ?>/<?php echo $setrows->profImage; ?>"></td>
                            <td class="text-center"><strong><?php echo $setrows->fullname; ?></strong></td>
                            <!-- <td class="text-center"><?php echo $setrows->chairmanship; ?></td> -->
                            <td class="text-center"><?php echo $setrows->role; ?></td>
                            <!-- <td class="text-center"><?php echo $setrows->rank; ?></td>   -->
                            <td class="text-center">
                                <a class="btn btn-success btn-sm" data-toggle="tooltip" title="View details" href="<?php echo site_url('Officials/BrgyOfficialData'); ?>/<?php echo $setrows->id; ?>"> <i class="fas fa-eye"></i></a>&nbsp;
                                <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Officials/editOfficial'); ?>/<?php echo $setrows->id; ?>"><i class="fas fa-edit"></i></a>
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