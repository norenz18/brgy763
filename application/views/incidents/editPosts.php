<?php $this->load->view('includes/header'); ?>



<div div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="<?php echo site_url('#'); ?>">INCIDENTS REPORT</a></li>
        <li>
            <!-- Button trigger modal -->
            <!-- <button type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
                <i id="log_out" class="fas fa-sign-out-alt"> Log out</i>
            </button> -->

            <!-- Modal -->
            <!-- <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            </div> -->
        </li>
    </ul>
</div><br>

<div class="container" id="editPostContainer">

    <form method="post" action="<?php echo site_url('Reports/update') ?> ">

        <input type="hidden" name="id" value="<?php echo $post['id']; ?>">

        <div class="form-group">
            <label for="">&nbsp;INCIDENT TITLE:<input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="title" placeholder="Report title" required> </label><br>
        </div>

        <div class="form-group">
            <textarea name="body" id="editor" class="form-control" rows="10" cols="10" required><?php echo $post['body']; ?></textarea><!-- id="editor1" -->
        </div>

        <button type="submit" onclick="myFunctionbtn()" class="btn btn-success btn-sm">Submit</button>
        <a href="<?php echo site_url('Reports') ?>"><button type="button" class="btn btn-danger btn-sm">Cancel</button></a>

    </form>

</div>
<br>
<?php $this->load->view('includes/footer'); ?>