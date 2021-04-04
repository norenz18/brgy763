<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('Blotter');?>">BLOTTER</a></li>
                        <li><a href="<?php echo site_url('welcome'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>       
                </div>

                <div class="container-fluid d-flex justify-content-around" id="main-container">

                            <div class="nav-main">

                                    <ul>
                                        <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
                                        <li><a href="<?php echo site_url('Dashboard');?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                                        <li><a href="<?php echo site_url('Residents/viewlist');?>"><i class="fas fa-users"></i> Residents</a></li>
                                        <li><a href="<?php echo site_url('Reports');?>"><i class="fas fa-clipboard-list"></i> Incident Report</a></li>
                                        <li><a href="<?php echo site_url('Blotter');?>"><i class="fas fa-book"></i> Blotter</a></li> <!--<i class="fas fa-print"></i>-->
                                        <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-scroll"></i> Certificates</a></li>                                      
                                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-users-cog"></i> Officials</a></li>          
                                    </ul>

                            </div>

                        <div class="container"><br><br>
                        
                                    <!-- Button trigger modal -->
                        &nbsp&nbsp;&nbsp;&nbsp;<button type="button" id="btn-add" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> BLOTTER</button>
                        
                        <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalLabel">ADD BLOTTER</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                </div>

                                <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5>

                        <div class="modal-body"> <!--opening modal body-->
                        
                        <form method="post" action="<?php echo site_url('Blotter/createBlotters')?>" enctype="multipart/form-data">
                   

                            <div class="form-row">
                               
                                <div class="form-group col-sm-2">
                                    <label for="">Case No.*</label>
                                    <input type="text" class="form-control" name="caseNo" required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Complainant*</label>
                                    <input type="text" class="form-control" name="complainant" required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Complained Resident*</label>
                                    <input type="text" class="form-control" name="compResident" >
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Date of Filing*</label>
                                    <input type="date" class="form-control" name="dateOfFiling" required>
                                </div>
                                
                                <div class="form-group col-sm-2">
                                    <label for="">Person-in-Charge*</label>
                                    <input type="text" class="form-control" name="pic" required>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="status">Status*</label><br>
                                    <input type="text" class="form-control" id="status" name="status" placeholder="Pending" readonly>
                                    <!-- <select class="form-control" id="status" name="status" readonly required>
                                        <option value="Pending">Pending</option>
                                    </select> -->
                                </div>

                                <div class="form-group col-lg-10">
                                    <label for="status">Descriptions*</label><br>
                                    <textarea class="form-control" id="textArea" resize="none" name="textArea" rows="10" cols="100" placeholder="Blotter Descriptions" required></textarea>
                                </div>   


                            </div>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>
                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>

                        </form>  
                        </div><!--end of modal body-->

                            </div>
                            </div>
                        </div><!-- end of modal -->

                        <div class="container-fluid" id="table-wrapper">
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
                                            <th scope="col" >Case No.</th><!-- data-field ="CaseNo." data-sortable="true"  -->
                                            <th scope="col" data-field ="Complainant" data-sortable="true">Complainant</th>
                                            <th scope="col" data-field ="ComplainedResident" data-sortable="true">Complained Resident</th>
                                            <th scope="col" data-field ="DateofFiling" data-sortable="true">Date of Filing <small>(year/month/day)</small></th>
                                            <th scope="col" data-field ="Person-in-Charge" data-sortable="true">Person-in-Charge</th>
                                            <th scope="col" data-field ="Status" data-sortable="true">Status</th>
                                            <th scope="col" data-field ="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <?php foreach($result as $setrows) : ?>  
                                            <tr>
                                            
                                                <td class="text-center"><?php echo $setrows->caseNo; ?></td>
                                                <td class="text-center"><?php echo $setrows->complainant; ?></td>
                                                <td class="text-center"><?php echo $setrows->compResident; ?></td>
                                                <td class="text-center"><?php echo $setrows->dateOfFiling; ?></td>
                                                <td class="text-center"><?php echo $setrows->pic; ?></td>
                                                <td class="text-center"><?php echo $setrows->status; ?></td>
                                                <td class="text-center"><a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Blotter/edit'); ?>/<?php echo $setrows->id;?>"><i class="fas fa-edit"></i></a></td>      
                                                
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        </div><!--end wrapper--> <br><br>           
                    </div><!--end container -->
            </div> 


<?php $this->load->view('includes/footer') ?>
      