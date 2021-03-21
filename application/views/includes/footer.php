

    <div class="footer">
          Developed by the BSIT students of &nbsp; <a href="https://cityofmalabonuniversity.edu.ph/" target="_blank">City of Malabon University.</a>
    </div>

       
    <script>


            function myFunctionbtn() {
                alert("Successfully Edited!");
            }
            
            
            function myFunction() {
            let input, filter, table, tr, td, i, txtValue;
            input = document.querySelector("#search-bar");
            filter = input.value.toUpperCase();
            table = document.querySelector("#table-list");
            tr = table.querySelectorAll("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].querySelectorAll("td")[1];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
             }
            };

            function myFunc() {
            let input, filter, table, tr, td, i, txtValue;
            input = document.querySelector("#searchbar");
            filter = input.value.toUpperCase();
            table = document.querySelector("#tbl-post");
            tr = table.querySelectorAll("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].querySelectorAll("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
             }
            };

    </script>
    

    <script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
    <script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo site_url('asset/bootstrap-table.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- <script> CKEDITOR.replace( 'editor1' );</script> -->

 
  </body>
</html>
   <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> -->
