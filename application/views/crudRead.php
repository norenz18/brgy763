<?php $this->load->view('includes/header'); ?>

    <?php { ?>
           
        <div class="main-content">

            <div class="nav">
                <ul>
                    <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                    <li><a href="">RESIDENT INFORMATION</a></li>
                    <li><a href="<?php echo site_url('users/login'); ?>"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
                </ul>       
            </div>
            <br>

            <div class="container note-detail">
                <h6 class="text-danger">Note: Make sure all the information that shows below are correct. </h6> 
                <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('CrudController/edit');?>/<?php echo $row->id;?> "><i class="fas fa-edit"></i>&nbsp;Edit</a>&nbsp;
                <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('#');?>/<?php echo $row->id;?> "><i class="fas fa-folder-plus"></i>&nbsp;Create Indigency</a>&nbsp;
                <a class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('#');?>/<?php echo $row->id;?> "><i class="fas fa-folder-plus"></i>&nbsp;Create Clearance</a>&nbsp;
                
            </div>
           
            <div class="container d-flex justify-content-evenly" id="div-content">
                
                    <div class="resPic">
                        <img src="<?php echo site_url('img/blogo.png'); ?>" alt=""><br>
                        <label for="">Profile Image</label>
                    </div>

                    <ul id="resProfile">
                            
                                <li><strong>First Name:</strong> <span><?php echo $row->firstName; ?></li>
                                <li><strong>Last Name:</strong> <span><?php echo $row->lastName; ?></li>
                                <li><strong>Mi:</strong> <span><?php echo $row->mi; ?></li>
                                <li><strong>Contact:</strong> <span><?php echo $row->contact; ?></li>
                                <li><strong>Address:</strong> <span><?php echo $row->address; ?></li>
                                <li><strong>Age:</strong> <span><?php echo $row->age; ?></li>
                                <li><strong>Voter Status:</strong> <span><?php echo $row->voterStatus; ?></li>
                                <li><strong>Gender:</strong> <span><?php echo $row->gender; ?></li>
                                <li><strong>Civil Status:</strong> <span><?php echo $row->civilStatus; ?></li>
                                <li><strong>Birthdate:</strong> <span><?php echo $row->birthdate; ?></li>                                             
                    </ul>

            </div>
     
        </div><!-- END OF MAIN CONTENT -->
    <?php }  ?>

<?php $this->load->view('includes/footer'); ?>


                    <!-- <div class="form-block" id="fline">
                        <div class="col-md-12"> 
                            <p> Last Name: <span><?php echo $row->lastName; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> First Name: <span><?php echo $row->firstName; ?></span></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p> Contact: <span><?php echo $row->contact; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> Age: <span><?php echo $row->age; ?></span </p>
                        </div>

                        <div class="col-md-12">
                            <p> Voter Status: <span><?php echo $row->voterStatus; ?></span </p>
                        </div>

                        <div class="col-md-12">
                            <p> Gender: <span><?php echo $row->gender; ?></span </p>
                        </div>

                        <div class="col-md-12">
                            <p> Civil Status: <span> <?php echo $row->civilStatus; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> Birthdate: <span><?php echo $row->birthdate; ?></span></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p> Address: <span><?php echo $row->address; ?></span></p>
                        </div>

                    </div> -->
                    
                           <!-- RIGHT SIDE -->
                    <!-- <div class="form-block" id="fline">
                    
                        <div class="col-md-12"> 
                            <p> Last Name: <span><?php echo $row->lastName; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> First Name: <span><?php echo $row->firstName; ?></span></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p> Contact: <span><?php echo $row->contact; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> Age: <span><?php echo $row->age; ?></span </p>
                        </div>

                        <div class="col-md-12">
                            <p> Gender: <span><?php echo $row->gender; ?></span </p>
                        </div>

                        <div class="col-md-12">
                            <p> Civil Status: <span> <?php echo $row->civilStatus; ?></span></p>
                        </div>

                        <div class="col-md-12">
                            <p> Birthdate: <span><?php echo $row->birthdate; ?></span></p>
                        </div>
                        
                        <div class="col-md-12">
                            <p> Address: <span><?php echo $row->address; ?></span></p>
                        </div>

                    </div> -->
   