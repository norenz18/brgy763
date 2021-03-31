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
                                        <li><a href="<?php echo site_url('BlotterController');?>"><i class="fas fa-book"></i> Blotter</a></li> <!--<i class="fas fa-print"></i>-->
                                        <li><a href="<?php echo site_url('CertificateController'); ?>"><i class="fas fa-scroll"></i> Permits&Certs.</a></li>                                      
                                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-users-cog"></i> Officials</a></li>          
                                    </ul>

                            </div>

                        <div class="container"><br><br>
                        
                        <div class="container-fluid" id="table-wrapper">

                        <a href="<?php echo site_url('CertificateController/indigencySection'); ?>"  class="btn btn-secondary btn-sm">CREATE INDIGENCY</a>&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('CertificateController/indigencySection'); ?>"  class="btn btn-secondary btn-sm">CREATE CLEARANCE</a>&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo site_url('CertificateController/indigencySection'); ?>"  class="btn btn-secondary btn-sm">CREATE BUSINESS PERMIT</a><br><br>
                                <table id="table-list" class="table table-sm table-hover table-border"  
                                    data-toggle="table"
                                    data-pagination="true"
                                    data-search="true"
                                    data-search-align="left"
                                    data-show-fullscreen="true"
                                    data-pagination-pre-text="Prev"
                                    data-pagination-next-text="Next"
                                    data-pagination-h-align="left"
                                    data-pagination-detail-h-align="right"
                                    data-show-pagination-switch="true"
                                    data-page-list="[10, 25, 50, 100, ALL]">

                                    <thead id="thead" class="col-sm-3 text-center">

                                        <tr>
                                           
                                            <th scope="col" data-field ="fullName" data-sortable="true">Full Name</th>
                                            <!-- <th scope="col" data-field ="address" data-sortable="true">Address</th> -->
                                            <th scope="col" data-field ="purpose" data-sortable="true">Purpose</th>
                                            <!-- <th scope="col" data-field ="date" data-sortable="true">Date</th> -->
                                            <!-- <th scope="col" data-field ="punongBrgy" data-sortable="true">Punong Brgy</th> -->
                                            <th scope="col" data-field ="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <?php foreach($result as $setrows) : ?>  
                                            <tr>
                                            
                                                <td class="text-left" style="text-transform: uppercase;"><?php echo $setrows->fullName; ?></td>
                                                <!-- <td class="text-center"><?php echo $setrows->address; ?></td> -->
                                                <td class="text-center" style="text-transform: uppercase;"><?php echo $setrows->purpose; ?></td>
                                                <!-- <td class="text-center"><?php echo $setrows->date; ?></td>
                                                <td class="text-center"><?php echo $setrows->punongBrgy; ?></td> -->
                                                <td class="text-center"><a class="btn btn-success btn-sm" data-toggle="tooltip"  title="View details" href="<?php echo site_url('CertificateController/edit');?>/<?php echo $setrows->id; ?>"> <i class="fas fa-eye"></i></a> <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('CrudController/edit');?>/<?php echo $setrows->id;?>"><i class="fas fa-edit"></i></a>
                                                <a class="btn btn-primary btn-sm" data-toggle="tooltip" target="__blank"  title="View details" href="<?php echo site_url('CertificateController/indigencyPdf'); ?>/<?php echo $setrows->id; ?>"> <i class="fas fa-print"></i></a>
                                             
                                                </td> 
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        </div><!--end wrapper--> <br><br>     
                      
                        </div><!--end container -->
                </div> <!-- end of main container -->


<?php $this->load->view('includes/footer') ?>
      