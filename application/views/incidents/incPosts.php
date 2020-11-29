<?php $this->load->view('includes/header'); ?>

            <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('PostsController');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="#">INCIDENT REPORT</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>       
            </div>
            <br>

            <div  id="incident_section">
                <div class="container-fluid">
                    <h1 id="titlehead"><?php echo $post['title']; ?></h1> <br>
                    <small id="postdate">Posted: <?php echo $post['created_at']; ?></small> <br><br>
                    <h6 id="postbody"><?php echo $post['body']; ?></h6>
                </div>
        <br>
        <hr>
                <p><a class="btn btn-success btn-sm" href="<?php echo site_url('PostsController/edit/'.$post['slug']); ?>">Edit</a>&nbsp;|&nbsp;<a class="btn btn-danger btn-sm" href="<?php echo site_url('PostsController/delete/'.$post['id']); ?>">Delete</a></p>
            </div>

           

<?php $this->load->view('includes/footer'); ?>