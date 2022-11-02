<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    {{-- My style --}}
    <link rel="stylesheet" href="/css/style.css">

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroes.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/footers.css" rel="stylesheet">

    <title>SPK SAW | {{ $title }}</title>
    <style>
      .rdo-ctr {
        text-align:center;
        font-size:16pt;
      }
      input[type="radio"] {
        font-size: 35px;
        height: 20px;
		    width: 20px;
        vertical-align: middle;
      }
    </style>
  </head>
  <body>

    @include('partials.navbar')

    <div class="container mt-4">
        @yield('container')
    </div>

    @include('partials.footer')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script src="js/offcanvas.js"></script>

    <script>
      $('#editData').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var data_id = button.data('dataid')// Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)

        var dt1 = data_id.c1;
        var dt2 = data_id.c2;
        var dt3 = data_id.c3;
        var dt4 = data_id.c4;
        var dt5 = data_id.c5;

        if (dt1 == 0) {
          dt1 = 1;
        } else if (dt1 == 0.25) {
          dt1 = 2;
        } else if (dt1 == 0.5) {
          dt1 = 3;
        } else if (dt1 == 0.75) {
          dt1 = 4;
        } else if (dt1 == 1) {
          dt1 = 5;
        }

        if (dt2 == 0) {
          dt2 = 1;
        } else if (dt2 == 0.25) {
          dt2 = 2;
        } else if (dt2 == 0.5) {
          dt2 = 3;
        } else if (dt2 == 0.75) {
          dt2 = 4;
        } else if (dt2 == 1) {
          dt2 = 5;
        }

        if (dt3 == 0) {
          dt3 = 1;
        } else if (dt3 == 0.25) {
          dt3 = 2;
        } else if (dt3 == 0.5) {
          dt3 = 3;
        } else if (dt3 == 0.75) {
          dt3 = 4;
        } else if (dt3 == 1) {
          dt3 = 5;
        }

        if (dt4 == 0) {
          dt4 = 1;
        } else if (dt4 == 0.25) {
          dt4 = 2;
        } else if (dt4 == 0.5) {
          dt4 = 3;
        } else if (dt4 == 0.75) {
          dt4 = 4;
        } else if (dt4 == 1) {
          dt4 = 5;
        }

        if (dt5 == 0) {
          dt5 = 1;
        } else if (dt5 == 0.25) {
          dt5 = 2;
        } else if (dt5 == 0.5) {
          dt5 = 3;
        } else if (dt5 == 0.75) {
          dt5 = 4;
        } else if (dt5 == 1) {
          dt5 = 5;
        }
        
        modal.find('.modal-body #ids').val(data_id.id)
        modal.find('.modal-body #name').val(data_id.name)
        modal.find('.modal-body #c1').val(dt1)
        modal.find('.modal-body #c2').val(dt2)
        modal.find('.modal-body #c3').val(dt3)
        modal.find('.modal-body #c4').val(dt4)
        modal.find('.modal-body #c5').val(dt5)

        $('#rate' + dt1).attr('checked', true)
        $('#sati' + dt2).attr('checked', true)
        $('#pric' + dt3).attr('checked', true)
        $('#time' + dt4).attr('checked', true)
        $('#supp' + dt5).attr('checked', true)
      })

      $('#delData').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var data_id = button.data('dataid')// Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        
        modal.find('.modal-body #idsdel').val(data_id.id)
        document.getElementById("data_nama").innerHTML = data_id.name;
      })

      $('#editWeight').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var data_id = button.data('dataid')// Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        
        modal.find('.modal-body #ids').val(data_id.id)
        modal.find('.modal-body #weight1').val(data_id.wgh1)
        modal.find('.modal-body #weight2').val(data_id.wgh2)
        modal.find('.modal-body #weight3').val(data_id.wgh3)
        modal.find('.modal-body #weight4').val(data_id.wgh4)
        modal.find('.modal-body #weight5').val(data_id.wgh5)
      })

      // Add Radio
      function clkrate(nilai){
        document.getElementById("c1").value=nilai;
      }
      function clksatisfied(nilai){
        document.getElementById("c2").value=nilai;
      }
      function clkprices(nilai){
        document.getElementById("c3").value=nilai;
      }
      function clktimeliness(nilai){
        document.getElementById("c4").value=nilai;
      }
      function clksupport(nilai){
        document.getElementById("c5").value=nilai;
      }
    </script>
    <div>
      @yield('contscript')
    </div>
  </body>
</html>