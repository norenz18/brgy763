<?php $this->load->view('includes/header'); ?>

<div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="#">INCIDENT REPORT</a></li>
        <li><a href="<?php echo site_url('welcome'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
    </ul>
</div>
<br>

<div id="incident_section">

    <div class="container-fluid" style="text-transform: capitalize;">
        <p><a class="btn btn-info btn-sm" href="<?php echo site_url('Reports/edit/' . $post['slug']); ?>">Edit</a>&nbsp;|

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">Delete</button>

            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="exampleModalLabel">Delete Report</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to Delete this Report? <br>
                            <span class="delete-text text-danger">this cannot be undone.</span>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-danger btn-sm" href="<?php echo site_url('Reports/delete/' . $post['id']); ?>">Delete</a>
                    </div>
                </div>
            </div>
        </div>
        </p>

        <h1 id="titlehead" style="text-transform: uppercase;"><?php echo $post['title']; ?></h1> <br>
        <small id="postdate">Posted: <?php echo $post['created_at']; ?></small> <br><br>
        <h6 id="postbody"><?php echo $post['body']; ?></h6>
    </div>
    <hr>

</div>


<?php $this->load->view('includes/footer'); ?>