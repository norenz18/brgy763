<?php $this->load->view('includes/header'); ?>


    
            <div   div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>">INCIDENTS REPORT EDIT</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>">Log out</a></li>
                    </ul>       
            </div><br>

    <div class="container" id="editContainer">

                <form method="post" action="<?php echo site_url('PostsController/update')?> ">

                    <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                               
                    <div class="form-group">
                        <label for="">&nbsp;INCIDENT TITLE:<input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="title" placeholder="Report title"> </label><br>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" name="body" value="<?php echo $post['body']; ?>" rows="10" cols="10"></textarea><!-- id="editor1" -->
                    </div>                 
                                       
                    <button type="submit" class="btn btn-success">Submit</button>

                </form>  

    </div>

<?php $this->load->view('includes/footer'); ?>