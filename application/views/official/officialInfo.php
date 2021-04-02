<?php $this->load->view('includes/header'); ?>

    <?php { ?>
           
        <div class="main-content">

            <div class="nav">
                <ul>
                    <li><a href="<?php echo site_url('Officials/BrgyOfficials');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                    <li><a href="">BRGY. OFFICIAL INFORMATION</a></li>
                    <li><a href="<?php echo site_url('welcome'); ?>"><i class="fas fa-sign-out-alt"></i>Log out</a></li>
                </ul>       
            </div>
            <br>

            <div class="container note-detail">
                <h6 class="text-danger">Note: Make sure all the information that shows below are correct. </h6> 
                <a class="btn btn-info btn-sm" data-toggle="tooltip" title="Edit details" href="<?php echo site_url('Officials/editOfficial');?>/<?php echo $setrows->id;?> "><i class="fas fa-edit"></i>&nbsp;Edit</a>&nbsp;
                   <!-- Button trigger modal -->
                   <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#staticBackdrop">
                                                    <i class="fas fa-trash-alt"> Delete</i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Delete Official</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            This action can cause deleting information of a resident. <br>
                                                            Are you sure you want to delete?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                                            <a class="btn btn-danger btn-sm" data-toggle="tooltip" id="dltbtn" title="Delete details" href="<?php echo site_url('CrudController/delete');?>/<?php echo $row->id;?> "><i class="fas fa-trash-alt"></i> Delete

                                                            </a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                
            </div> <!-- note-detail -->
           
            <div class="container d-flex justify-content-evenly" id="div-content">
                
                    <div class="resPic">
                        <img id="profileImgs" src="<?php echo site_url('img'); ?>/<?php echo $setrows->profImage; ?>">
                    </div>

                    <ul id="resProfile">
                            
                                <li><strong>First Name:</strong> <span><?php echo $setrows->firstname; ?></li>
                                                                         
                    </ul>

            </div>
     
        </div><!-- END OF MAIN CONTENT -->
    <?php }  ?>

<?php $this->load->view('includes/footer'); ?>
