<?php $this->load->view('includes/header'); ?>
       
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
  
    html, body{

        height: auto;
        width: 100%;
        margin: 0;
        padding: 0;
        background: linear-gradient(45deg, #9fd8ef 17%,#9fd8ef 33%,#9fd8ef 33%,#9fd8ef 34%,#e4f5fc 43%,#e4f5fc 51%,#2ab0ed 77%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    }
    #cap{

        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
    }
    #cap #capt{

        height: 400px;
        filter: drop-shadow(20px 20px 25px #000000);
        border-radius: 15px;
        border: none; 

    }
    #cap #blogo, #lmanila{

        height: 200px;
        width: 200px;
        filter: drop-shadow(20px 20px 25px #000000);
    }
   
    #kag{

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: flex-end;
        width: auto;
        padding: 0;
       
       
    }
    #kag img{

        height: 300px;
        width: auto;
        object-fit: contain;
        border-radius: 15px;
        border: none;
        filter: drop-shadow(20px 20px 25px black);
    }
    #sk {

        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        align-items: flex-start;
        width: auto;
        padding: 0;
    }
    #sk img{

        height: 250px;
        width: auto;
        object-fit: cover;
        border-radius: 15px;
        border: none;
        filter: drop-shadow(20px 20px 25px #000000);
    }
    


    
</style>

</head>
<body>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-angle-double-left"></i> Back</a></li>
                        <li><a href="<?php echo site_url('Officials');?>">BRGY. OFFICIALS</a></li>
                        <li><a href="<?php echo site_url('users/login'); ?>">Log out</a></li>
                    </ul>       
                </div><br>


                <div class="container" id="cap">
                    <img id="blogo" src="<?php echo site_url('img/blogo.png'); ?>" alt="">
                    <img id="capt" src="<?php echo site_url('img/captain.png'); ?>" alt="">
                    <img id="lmanila" src="<?php echo site_url('img/logomanila.png'); ?>" alt="">

                </div><br>

                <div class="container" id="kag">
                        <img src="<?php echo site_url('img/kagawad.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/kagawad2.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/kagawad3.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/kagawad4.png'); ?>" alt="">               
                </div><br>

                <div class="container" id="kag">
                        <img src="<?php echo site_url('img/kagawad5.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/kagawad6.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/kagawad7.png'); ?>" alt="">                 
                </div><br>

                <div class="container" id="sk">
                        <img id="sec" src="<?php echo site_url('img/secretary.png'); ?>" alt="">
                        <img src="<?php echo site_url('img/sk.png'); ?>" alt="">
                        <img id="tre" src="<?php echo site_url('img/treasurer.png'); ?>" alt="">
                </div><br>

         




   

<?php $this->load->view('includes/footer'); ?>

<!-- <div class="container">
<form method="post" action="<?php echo site_url('CrudController/create')?>" enctype="multipart/form-data">
                   

                   <div class="form-row">

                       <div class="form-group">
                           <label for="">Brgy. Captain</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #1</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #2</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #3</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #4</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #5</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Kagawad #6</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>
                       
                       <div class="form-group">
                           <label for="">Kagawad #7</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">SK Chairman</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Secretary</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>

                       <div class="form-group">
                           <label for="">Treasurer</label> <br>
                           <input type="file" name="userfile" size="20" required>
                       </div>
                      
                     

                   </div>
                   <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save</button>

               </form> 
</div> -->