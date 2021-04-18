<?php $this->load->view('includes/header'); ?>

<div class="nav">
        <ul>

                <li><a href="<?php echo site_url('Reports'); ?>">INCIDENT REPORT</a></li>
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


<div class="container-fluid d-flex justify-content-around" id="incidentTab">

        <div class="nav-main">

                <ul>
                        <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
                        <li><a href="<?php echo site_url('Dashboard'); ?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                        <li><a href="<?php echo site_url('Residents/viewlist'); ?>"><i class="fas fa-users"></i> Residents</a></li>
                        <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-clipboard-list"></i> Reports</a></li>
                        <li><a href="<?php echo site_url('Blotter'); ?>"><i class="fas fa-book"></i> Blotter</a></li>
                        <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-scroll"></i> Certificates</a></li>
                        <li><a href="<?php echo site_url('Officials'); ?>"><i class="fas fa-users-cog"></i> Officials</a></li>
                </ul>

        </div>


        <div class="container"><br>

                &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="btnadd" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> ADD REPORT</button>

                <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                        <div class="modal-header">
                                                <h5 class="modal-title text-info" id="exampleModalLabel">REPORT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                </button>

                                        </div>

                                        <!-- <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5> -->

                                        <div class="modal-body">
                                                <!--opening modal body-->
                                                <form method="post" action="<?php echo site_url('Reports/create') ?> ">

                                                        <div class="form-group">
                                                                <label for="">&nbsp;REPORT TITLE:<input type="text" class="form-control" name="title" placeholder="Add report title.." required> </label><br>
                                                        </div>

                                                        <div class="form-group">
                                                                <textarea class="form-control" name="body" rows="10" cols="10" placeholder="Add text.." required></textarea>
                                                        </div>

                                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                                                </form>
                                        </div>
                                        <!--end of modal body-->

                                </div><!-- Modal Content -->
                        </div><!-- modal dialog-->
                </div><!-- end of modal -->

                <div class="container" id="table-posts">

                        <table id="table-list" class="table table-sm table-hover table-striped" data-toggle="table" data-pagination="true" data-search="true" data-search-align="left" data-show-fullscreen="true" data-pagination-pre-text="Prev" data-pagination-next-text="Next" data-pagination-h-align="left" data-pagination-detail-h-align="right" data-show-pagination-switch="true" data-page-list="[10, 25, 50, 100, ALL]">

                                <thead id="thead">

                                        <tr>
                                                <th scope="col" class="col-sm-3 text-center" data-field="Report" data-sortable="true" data-switchable="false">Report</th>
                                                <th scope="col" class="col-sm-3 text-center" data-field="Descriptions" data-sortable="true" data-switchable="false">Descriptions</th>
                                                <th scope="col" class="col-sm-3 text-center" data-field="Date" data-sortable="true" data-switchable="false">Date <small>(Yr/Month/Day/Time)</small></th>
                                                <th scope="col" class="col-sm-3 text-center">Read</th>
                                        </tr>

                                </thead>

                                <tbody id="tbody">
                                        <?php foreach ($posts as $post) : ?>
                                                <tr>
                                                        <td class="text-center" id="post-title"><strong><?php echo $post['title']; ?></strong></td>
                                                        <td>
                                                                <h6 id="post-body"><?php echo word_limiter($post['body'], 5); ?></h6>
                                                        </td>
                                                        <td><small id="post-date"><?php echo $post['created_at']; ?></small><br></td>
                                                        <td><a class="btn btn-info btn-sm" href="<?php echo site_url('Reports/view/' . $post['slug']); ?>"><i class="fas fa-book-reader"></i></a></td>
                                                </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>
                </div>
                <!--end wrapper-->
        </div> <br><br>
</div>



<?php $this->load->view('includes/footer'); ?>