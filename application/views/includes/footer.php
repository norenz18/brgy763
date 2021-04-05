

    <div class="footer">
          Developed by the BSIT students of &nbsp; <a href="https://cityofmalabonuniversity.edu.ph/" target="_blank">City of Malabon University.</a>
    </div>

       
    <script>
               
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

            // DATEPICKER
            $(document).ready(function() {
            var age = "";
            $('#birthdate').datepicker({
                onSelect: function(value, ui) {
                    var today = new Date();
                    age = today.getFullYear() - ui.selectedYear;
                    $('#age').val(age);
                },
                changeMonth: true
               
            })
        });


        // DecoupledEditor
        // .create( document.querySelector( '#editor' ) )
        // .then( editor => {
        //     const toolbarContainer = document.querySelector( '#toolbar-container' );

        //     toolbarContainer.appendChild( editor.ui.view.toolbar.element );
        // } )
        // .catch( error => {
        //     console.error( error );
        // } );

        // HIDE AND SHOW
        // $(function() {    // Makes sure the code contained doesn't run until
        //           //     all the DOM elements have loaded
        // $('#category').change(function(){
        //     $('.categories').hide();
        //     $('#' + $(this).val()).show();
        // });

        // });

     

    </script>
   
    
    <script src="<?php echo site_url('bootstrap/js/jquery.slim.min.js') ?>"> </script>
    <script src="<?php echo site_url('bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo site_url('bootstrap/js/jquery-ui.js') ?>"></script>
    <script src="<?php echo site_url('asset/bootstrap-table.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    
   
  </body>
</html>
