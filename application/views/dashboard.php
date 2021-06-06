<?php $this->load->view('includes/header'); ?>

<style>
  #container {

    display: flex;
    flex-direction: column;
    margin-top: 50px;
    justify-content: center;
    background-color: #fefefe;
    width: 870px;
    padding: 0 50px 30px;

  }

  button {

    width: 65px;
    cursor: pointer;
    box-shadow: 0px 0px 2px gray;
    border: none;
    outline: none;
    padding: 3px;
    border-radius: 5px;
    color: white;

  }

  #header {

    padding: 20px;
    color: #d36c6c;
    font-family: nexa, lucida;
    display: flex;
    flex-direction: column;
    justify-content: space-between;

  }

  #header #monthDisplay {

    font-size: 3rem;
    color: #123a4a;
  }

  #header button {

    background-color: #123a4a;
    font-size: 12px;

  }

  #weekdays {

    width: 100%;
    display: flex;
    color: #247BA0;


  }

  #weekdays div {

    width: auto;
    padding: 22px;
    font-family: nexa, lucida;

  }

  #calendar {

    width: 100%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;

  }

  .day {

    width: 100px;
    padding: 10px;
    height: 100px;
    cursor: pointer;
    box-sizing: border-box;
    background-color: white;
    margin: 5px;
    box-shadow: 0px 0px 3px darkblue;
    display: flex;
    flex-direction: column;
    justify-content: space-between;


  }

  .day:hover {

    background-color: #e8faed;

  }

  .day+#currentDay {

    background-color: #95bee5;

  }

  .event {

    font-size: 10px;
    padding: 3px;
    background-color: #F7665E;
    color: white;
    border-radius: 5px;
    max-height: 55px;
    overflow: hidden;

  }

  .padding {

    cursor: default !important;
    background-color: #FFFCFF !important;
    box-shadow: none !important;

  }

  #newEventModal,
  #deleteEventModal {

    display: none;
    z-index: 20;
    padding: 25px;
    background-color: #e8f4fa;
    box-shadow: 0px 0px 3px black;
    border-radius: 5px;
    width: 350px;
    top: 100%;
    left: calc(50% - 175px);
    position: absolute;
    font-family: nexa, lucida;

  }

  #eventTitleInput {

    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    margin-bottom: 25px;
    border-radius: 3px;
    outline: none;
    border: none;
    box-shadow: 0px 0px 3px gray;
    resize: none;

  }

  #eventTitleInput.error {

    border: 2px solid red;

  }

  #cancelButton,
  #deleteButton {

    background-color: #d36c6c;

  }

  #saveButton,
  #closeButton {

    background-color: #30c730;

  }

  #eventText {

    font-size: 18px;

  }

  #modalBackDrop {

    display: none;
    top: 0px;
    left: 0px;
    z-index: 10;
    width: 100%;
    height: 184vh;
    position: absolute;
    background-color: rgba(0, 0, 0, 0.8);
  }
</style>

<div class="nav">
  <ul>
    <li><a href="<?php echo site_url('Dashboard'); ?>">DASHBOARD</a></li>
    <li>
      <!-- Button trigger modal -->
      <a type="button" class="btn" data-toggle="modal" data-target="#staticBackdrop">
        <i id="log_out" class="fas fa-sign-out-alt"> Log out</i>
      </a>

      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="staticBackdropLabel">Log Out</h5>
              <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button> -->
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
      </div>
    </li>
  </ul>
</div>

<div class="container-fluid d-flex justify-content-around" id="main-container">

  <div class="nav-main">

    <ul>
      <li><img id="brgylogo" alt="brgy. 763 zone 83" src="<?php echo site_url('img/brgylogo1.png'); ?>" /></li>
      <li><a href="<?php echo site_url('Dashboard'); ?>"><i class="far fa-chart-bar"></i> Dashboard</a></li>
      <li><a href="<?php echo site_url('Residents/viewlist'); ?>"><i class="fas fa-users"></i> Residents</a></li>
      <li><a href="<?php echo site_url('Reports'); ?>"><i class="fas fa-clipboard-list"></i> Report</a></li>
      <li><a href="<?php echo site_url('Blotter'); ?>"><i class="fas fa-book"></i> Blotter</a></li>
      <!--<i class="fas fa-print"></i>-->
      <li><a href="<?php echo site_url('Certificate'); ?>"><i class="fas fa-scroll"></i> Certificates</a></li>
      <li><a href="<?php echo site_url('Officials'); ?>"><i class="fas fa-users-cog"></i> Officials</a></li>
      <li><a href="Dashboard/database_backup" style="font-size: 15px;"><i class="fas fa-download"></i> Back-Up Database</a></li>
    </ul>

  </div>


  <div class="container dataCount">

    <div class="count">
      <h3><a href="<?php echo base_url() ?>Residents/export_csv">TOTAL<br>POPULATION<br></a><i class="fas fa-users"></i>&nbsp;
        <span> <?php echo $this->db->count_all('tbl_name'); ?></span><br>
      </h3>
    </div>

    <div class="count">
      <h3>PENDING <br> CASES<br><i class="fas fa-file-alt"></i>&nbsp;
        <span><?php $this->db->select('*');
              $this->db->from('blotter');
              $this->db->like('status', 'Pending');
              echo $this->db->count_all_results(); ?></span>
      </h3>
    </div>

    <div class="count">
      <h3>ON-GOING <br> CASES<br><i class="fas fa-exclamation-circle"></i>&nbsp;
        <span><?php $this->db->select('*');
              $this->db->from('blotter');
              $this->db->like('status', 'On-going');
              echo $this->db->count_all_results(); ?></span>
      </h3>
    </div>

    <div class="count">
      <h3>REGISTERED <br> VOTERS<br><i class="fas fa-user-check"></i>&nbsp;
        <span><?php $this->db->select('*');
              $this->db->from('tbl_name');
              $this->db->like('voterStatus', 'Yes');
              echo $this->db->count_all_results(); ?></span>
      </h3>
    </div>

    <div class="count">
      <h3><a href="<?php echo base_url() ?>Residents/export_csvpwd">DIFFERENTLY <br> ABLED PERSON<br></a> &#58648;<i class="fas fa-wheelchair"></i>&nbsp;
        <span> <?php $this->db->select('*');
                $this->db->from('tbl_name');
                $this->db->like('pwd', 'Yes');
                echo $this->db->count_all_results(); ?></span>
      </h3>
    </div>

    <div class="count">
      <h3><a href="<?php echo base_url() ?>Residents/export_csvs">SENIOR<br>CITIZEN<br></a><i class="fas fa-user"></i>&nbsp;
        <span> <?php $this->db->select('*');
                $this->db->from('tbl_name');
                $this->db->like('seniorCitizen', 'Senior Citizen');
                echo $this->db->count_all_results(); ?></span>
      </h3>
    </div>




    <!-- CALENDAR -->
    <div class="container" id="container">
      <div id="header">
        <div id="monthDisplay"></div>

        <div>
          <button id="backButton">Back</button>
          <button id="nextButton">Next</button>
        </div>

      </div>



      <div id="weekdays">
        <div style="color: red;">Sunday</div>
        <div>Monday</div>
        <div>Tuesday</div>
        <div>Wednesday</div>
        <div>Thursday</div>
        <div>Friday</div>
        <div>Saturday</div>
      </div>

      <div id="calendar"></div>
    </div>

    <div id="newEventModal">
      <h3>New Event</h3>

      <textarea name="" id="eventTitleInput" placeholder="Event Title" cols="30" rows="10"></textarea> <!-- <input  id="eventTitleInput" placeholder="Event Title" /> -->

      <button id="saveButton">Save</button>
      <button id="cancelButton">Cancel</button>
    </div>

    <div id="deleteEventModal">
      <h2>Event</h2>

      <p id="eventText"></p>

      <button id="deleteButton">Delete</button>
      <button id="closeButton">Close</button>
    </div>

    <div id="modalBackDrop"></div>


  </div>
  <!--end datcount container -->



</div> <!-- end of main container -->


<?php $this->load->view('includes/footer') ?>