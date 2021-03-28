<?php $this->load->view('includes/header'); ?>

                <div class="nav">
                    <ul>
                        <li><a href="<?php echo site_url('CrudController');?>">DASHBOARD</a></li>
                        <li><a href="<?php echo site_url('welcome'); ?>"><i class="fas fa-sign-out-alt"></i> Log out</a></li>
                    </ul>
                </div>

                <div class="container-fluid d-flex justify-content-around" id="main-container">

                            <div class="nav-main">

                                    <ul>
                                        <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
                                        <li><a href="<?php echo site_url('CrudController');?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                                        <li><a href="<?php echo site_url('CrudController/viewlist');?>"><i class="fas fa-users"></i> Residents</a></li>
                                        <li><a href="<?php echo site_url('PostsController');?>"><i class="fas fa-clipboard-list"></i> Incident Report</a></li>
                                        <li><a href="<?php echo site_url('BlotterController');?>"><i class="fas fa-book"></i> Blotter</a></li> <!--<i class="fas fa-print"></i>-->
                                        <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-scroll"></i> Permits&Certs.</a></li>                                   
                                        <li><a href="<?php echo site_url('Officials');?>"><i class="fas fa-users-cog"></i> Officials</a></li>          
                                    </ul>

                            </div>

                    <div class="container dataCount">

                                <div class="count">
                                    <h3>TOTAL POPULATION<br><i class="fas fa-users"></i>        
                                        <?php echo $this->db->count_all('tbl_name'); ?><br>
                                    </h3>                                  
                                </div>

                                <div class="count">
                                    <h3>ON-GOING CASES<br><i class="fas fa-exclamation-circle"></i>
                                        <?php $this->db->select('*');
                                        $this->db->from('blotter');
                                        $this->db->like('status', 'On-going');
                                        echo $this->db->count_all_results(); ?>
                                    </h3>
                                </div>

                                <div class="count">
                                <h3>REGISTERED VOTERS<br><i class="fas fa-user-check"></i>
                                        <?php $this->db->select('*');
                                        $this->db->from('tbl_name');
                                        $this->db->like('voterStatus', 'Yes');
                                        echo $this->db->count_all_results(); ?>
                                    </h3>
                                </div>

                                <div class="count">
                                <h3>DIFFERENTLY ABLED PERSON<br><i class="fas fa-wheelchair"></i>
                                        <?php $this->db->select('*');
                                        $this->db->from('tbl_name');
                                        $this->db->like('pwd', 'Yes');
                                        echo $this->db->count_all_results(); ?>
                                    </h3>
                                </div>

                            
         
                    </div><!--end container -->


                </div> <!-- end of main container -->


<?php $this->load->view('includes/footer') ?>
            