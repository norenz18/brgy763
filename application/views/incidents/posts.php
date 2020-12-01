<?php $this->load->view('includes/header'); ?>

            <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="<?php echo site_url('PostsController');?>">INCIDENT REPORT</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>       
            </div>
            <br>


        <div class="container" id="incidentTab">
        
                        <button type="button" id="btnadd" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> ADD REPORT</button>
                        <input type="text" id="searchbar" onkeyup="myFunc();" placeholder=" Search..">&nbsp;<i class="fas fa-search"></i><br><br>
                    
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-info" id="exampleModalLabel">INCIDENT REPORT</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    
                                </div>

                                <!-- <h5><small class="modal-title text-danger" id="exampleModalLabel">&nbsp&nbsp;&nbsp;Note: Make sure all the details are correct.</small></h5> -->

                                <div class="modal-body"> <!--opening modal body-->
                                        <form method="post" action="<?php echo site_url('PostsController/create')?> ">
                                               
                                                        <div class="form-group">
                                                                <label for="">&nbsp;INCIDENT TITLE:<input type="text" class="form-control" name="title" placeholder="Add Report title.."> </label><br>
                                                        </div>

                                                        <div class="form-group">
                                                                <textarea class="form-control" name="body" rows="10" cols="10" placeholder="Add text.."></textarea>
                                                        </div>                 
                                                
                                                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                        </form>  
                                </div><!--end of modal body-->

                        </div><!-- Modal Content -->
                        </div><!-- modal dialog-->
                </div><!-- end of modal -->

                        <div class="col" id="post-side">
                                <div id="post-scroll">
                                <table class="table table-lg" id="tbl-post">                           
                                        <?php foreach($posts as $post) : ?>
                                                <tr>
                                                        <td class="table-dark" id="post-title"><h1><?php echo $post['title']; ?></h1> 
                                                        <small id="post-date">Posted: <?php echo $post['created_at']; ?></small><br></td>
                                                        <td><h6 id="post-body"><?php echo word_limiter($post['body'], 50); ?></h6>
                                                        <p><a class="btn btn-info btn-sm" href="<?php echo site_url('PostsController/view/'.$post['slug']); ?>">Read More..</a></p></td>
                                                </tr>
                                        <?php endforeach; ?>  
                                </table>
                                </div>
                        </div>

        </div> <!-- end of IncidentTab -->

<?php $this->load->view('includes/footer'); ?>