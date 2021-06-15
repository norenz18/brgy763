<?php $this->load->view('includes/header'); ?>



<div div class="nav">
    <ul>
        <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
        <li><a href="<?php echo site_url('#'); ?>">INCIDENTS REPORT</a></li>
        <li>
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