<div class="footer">
  Developed by the BSIT students of &nbsp; <a href="https://cityofmalabonuniversity.edu.ph/" target="_blank">City of Malabon University.</a> &nbsp; &#169; All rights reserved 2021
</div>


<script>
  // DATEPICKER
  $(document).ready(function() {
    var age = "";
    $('#birthdate').datepicker({
      onSelect: function(value, ui) {
        var today = new Date();
        age = today.getFullYear() - ui.selectedYear;
        $('#age').val(age);
      },
      changeMonth: true,
      changeYear: true,
      yearRange: "c-100:c+78"

    })
  });


  // SENIOR CITIZEN FUNCTIONALITY
  function pressed() {
    let aged = document.getElementById("age").value;
    let senior = document.getElementById('seniorCitizen').value;

    if (aged <= 0 && senior == "") {

      swal("Your age is invalid!", "Not Eligible", "error");
      return false;

    } else if (aged >= 60) {

      return document.getElementById('seniorCitizen').value = 'Senior Citizen';

    } else {
      document.getElementById('seniorCitizen').value = 'No';
    }
  };


  // EDIT RESIDENT
  function press() {
    let aged = document.getElementById("age").value;
    let senior = document.getElementById('seniorCitizen').value;

    if (aged <= 0) {

      swal("Your age is invalid!", "Make sure to insert a valid Birthdate!", "error");
      return false;

    } else if (aged >= 60) {

      return document.getElementById('seniorCitizen').value = 'Senior Citizen';

    } else {
      document.getElementById('seniorCitizen').value = 'No';
    }
  };


  // BLOTTER DATE OF FILING
  $(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if (month < 10)
      month = '0' + month.toString();
    if (day < 10)
      day = '0' + day.toString();

    var maxDate = year + '-' + month + '-' + day;
    // alert(maxDate);
    $('#dateOfFiling').attr('max', maxDate);
    $('#dateOfcert').attr('max', maxDate);
  });


  // CALENDAR
  let nav = 0;
  let clicked = null;
  let events = localStorage.getItem('events') ? JSON.parse(localStorage.getItem('events')) : [];

  const calendar = document.getElementById('calendar');
  const newEventModal = document.getElementById('newEventModal');
  const deleteEventModal = document.getElementById('deleteEventModal');
  const backDrop = document.getElementById('modalBackDrop');
  const eventTitleInput = document.getElementById('eventTitleInput');
  const weekdays = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

  function openModal(date) {
    clicked = date;

    const eventForDay = events.find(e => e.date === clicked);

    if (eventForDay) {
      document.getElementById('eventText').innerText = eventForDay.title;
      deleteEventModal.style.display = 'block';
    } else {
      newEventModal.style.display = 'block';
    }

    backDrop.style.display = 'block';
  }

  function load() {
    const dt = new Date();

    if (nav !== 0) {
      dt.setMonth(new Date().getMonth() + nav);
    }

    const day = dt.getDate();
    const month = dt.getMonth();
    const year = dt.getFullYear();

    const firstDayOfMonth = new Date(year, month, 1);
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    const dateString = firstDayOfMonth.toLocaleDateString('en-us', {
      weekday: 'long',
      year: 'numeric',
      month: 'numeric',
      day: 'numeric',
    });
    const paddingDays = weekdays.indexOf(dateString.split(', ')[0]);

    document.getElementById('monthDisplay').innerText =
      `${dt.toLocaleDateString('en-us', { month: 'long' })} ${year}`;

    calendar.innerHTML = '';

    for (let i = 1; i <= paddingDays + daysInMonth; i++) {
      const daySquare = document.createElement('div');
      daySquare.classList.add('day');

      const dayString = `${month + 1}/${i - paddingDays}/${year}`;

      if (i > paddingDays) {
        daySquare.innerText = i - paddingDays;
        const eventForDay = events.find(e => e.date === dayString);

        if (i - paddingDays === day && nav === 0) {
          daySquare.id = 'currentDay';
        }

        if (eventForDay) {
          const eventDiv = document.createElement('div');
          eventDiv.classList.add('event');
          eventDiv.innerText = eventForDay.title;
          daySquare.appendChild(eventDiv);
        }

        daySquare.addEventListener('click', () => openModal(dayString));
      } else {
        daySquare.classList.add('padding');
      }

      calendar.appendChild(daySquare);
    }
  }

  function closeModal() {
    eventTitleInput.classList.remove('error');
    newEventModal.style.display = 'none';
    deleteEventModal.style.display = 'none';
    backDrop.style.display = 'none';
    eventTitleInput.value = '';
    clicked = null;
    load();
  }

  function saveEvent() {
    if (eventTitleInput.value) {
      eventTitleInput.classList.remove('error');

      events.push({
        date: clicked,
        title: eventTitleInput.value,
      });

      localStorage.setItem('events', JSON.stringify(events));
      closeModal();
    } else {
      eventTitleInput.classList.add('error');
    }
  }

  function deleteEvent() {
    events = events.filter(e => e.date !== clicked);
    localStorage.setItem('events', JSON.stringify(events));
    closeModal();
  }

  function initButtons() {
    document.getElementById('nextButton').addEventListener('click', () => {
      nav++;
      load();
    });

    document.getElementById('backButton').addEventListener('click', () => {
      nav--;
      load();
    });

    document.getElementById('saveButton').addEventListener('click', saveEvent);
    document.getElementById('cancelButton').addEventListener('click', closeModal);
    document.getElementById('deleteButton').addEventListener('click', deleteEvent);
    document.getElementById('closeButton').addEventListener('click', closeModal);
  }

  initButtons();
  load();
</script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
<script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
<script src="<?php echo site_url('bootstrap/js/jquery.js') ?>"></script>
<script src="<?php echo site_url('bootstrap/js/jquery-ui.js') ?>"></script>
<script src="<?php echo site_url('asset/bootstrap-table.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>


</body>

</html>