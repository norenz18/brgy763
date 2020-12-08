<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>">RESIDENTS</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>       
                </div>

                <div class="container-fluid d-flex justify-content-around" id="main-container">

                            <div class="nav-main">

                                    <ul>
                                        <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo.png'); ?>" /></li>
                                        <li><a href="<?php echo site_url('CrudController');?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-users"></i> Residents</a></li>
                                        <li><a href="<?php echo site_url('PostsController');?>"><i class="fas fa-clipboard-list"></i> Incident Report</a></li>
                                        <li><a href=""><i class="fas fa-book"></i> Blotter</a></li> <!--<i class="fas fa-print"></i>-->
                                        <li><a href=""><i class="fas fa-scroll"></i> Permits</a></li>                                      
                                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-users-cog"></i> Officials</a></li>          
                                    </ul>

                            </div>

                        <div class="container"><br><br>
                        
                                    <!-- Button trigger modal -->
                        &nbsp&nbsp;&nbsp;&nbsp;<button type="button" id="btn-add" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-user-plus"></i> ADD RESIDENT</button>
                        
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalLabel">ADD RESIDENT</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                </div>

                                <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5>

                        <div class="modal-body"> <!--opening modal body-->
                        
                        <form method="post" action="<?php echo site_url('CrudController/create')?>" enctype="multipart/form-data">
                   

                            <div class="form-row">

                                <div class="form-group">
                                    <label for="">Upload Image</label> <br>
                                    <input type="file" name="userfile" size="20" required>
                                </div>
                               
                                <div class="form-group col-sm-3">
                                    <label for="">First Name</label>
                                    <input type="text" class="form-control" name="firstName" required>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Last Name</label>
                                    <input type="text" class="form-control" name="lastName" required>
                                </div>

                                <div class="form-group col-sm-1">
                                    <label for="">MI.</label>
                                    <input type="text" class="form-control" name="mi" >
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Birthdate</label>
                                    <input type="date" class="form-control" name="birthdate" required>
                                </div>
                                
                                <div class="form-group col-sm-1">
                                    <label for="">Age</label>
                                    <input type="number" class="form-control" name="age" required>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="civilStatus">Civil Status</label><br>
                                    <select class="form-control" id="civilStatus" name="civilStatus" required>
                                        <option value=""></option>
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Solo Parent">Solo Parent</option>
                                        <option value="Divorced">Divorced</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Contact</label>
                                    <input type="number" class="form-control" name="contact" required>
                                </div>

                                <div class="form-group col-sm-2">
                                    <label for="">Person w/ Disability</label>
                                    <select id="" class="form-control" id="pwd" name="pwd" required>
                                        <option value=""></option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-3">
                                    <label for="">Address</label>
                                    <input type="text" class="form-control" name="address" id="address" required>
                                </div>

                                <div class="form-group col-sm-2" >
                                
                                    <label for="">Voter Status</label><br>
                                    <input type="radio" id="voterStatus" name="voterStatus" value="Yes" required>
                                    <label for="">Yes</label><br>
                                    <input type="radio" id="voterStatus" name="voterStatus" value="No" required>
                                    <label for="">No</label><br>
                                    
                                </div>

                                <div class="form-group col-sm-2" >
                                
                                    <label for="male">Gender</label><br>
                                    <input type="radio" id="gender" name="gender" value="Male" required>
                                    <label for="male">Male</label><br>
                                    <input type="radio" id="gender" name="gender" value="Female" required>
                                    <label for="female">Female</label><br>
                                    
                                </div>

                            </div>
                            <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>

                        </form>  
                        </div><!--end of modal body-->

                            </div>
                            </div>
                        </div><!-- end of modal -->

                        <div class="container-fluid" id="table-wrapper">
                                <table id="table-list" class="table table-sm table-hover table-striped"  data-toggle="table"
                                    data-pagination="true"
                                    data-search="true"
                                    data-search-align="left"
                                    data-show-fullscreen="true"
                                    data-pagination-pre-text="Prev"
                                    data-pagination-next-text="Next"
                                    data-pagination-h-align="left"
                                    data-pagination-detail-h-align="right"
                                    data-url="">

                                    <thead id="thead" class="col-sm-3 text-center">

                                        <tr>
                                            <th scope="col" >View</th>
                                            <!-- <th scope="col">Image</th> -->
                                            <th scope="col" data-field ="Name" data-sortable="true">Name <span><small>(Firstname, Mi, Lastname)</small></span></th>
                                            <th scope="col" data-field ="Address" data-sortable="true">Address</th>
                                            <th scope="col" data-field ="Age" data-sortable="true">Age</th>
                                            <th scope="col" data-field ="Gender" data-sortable="true">Gender</th>
                                            <th scope="col" data-field ="Voter" data-sortable="true">Voter</th>
                                            <th scope="col" data-field ="Action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody">
                                        <?php foreach($result as $row) : ?>  
                                            <tr>
                                            
                                                <td class="text-center"><a class="btn btn-success btn-sm" data-toggle="tooltip"  title="View details" href="<?php echo site_url('CrudController/read');?>/<?php echo $row->id; ?>"> <i class="fas fa-eye"></i></a></td>
                                                <!-- <td id="profileImg"><img id="profileImg" src="<?php echo site_url('img'); ?>/<?php echo $row->profImage; ?>"></td> -->
                                                <td class="text-left" id="fml"><?php echo $row->firstName; ?> <?php echo $row->mi; ?> <?php echo $row->lastName; ?></td>
                                                <td class="text-left" id="adrs"><?php echo $row->address; ?> Dist. 5 San Andres, Manila</td>
                                                <td class="text-center"><?php echo $row->age; ?></td>
                                                <td class="text-center"><?php echo $row->gender; ?></td>
                                                <td class="text-center"><?php echo $row->voterStatus; ?></td>
                                                <td class="text-center"> <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?>"><i class="fas fa-edit"></i></a>

                                             
                                                </td>      
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                        </div><!--end wrapper-->            
                    </div><!--end container -->
            </div>


<?php $this->load->view('includes/footer') ?>
            