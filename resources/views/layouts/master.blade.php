<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>DRAE</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('image/C2.png')}}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('css/toastr.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('./css/datatables.min.css')}}">


</head>
<style>
    .accordion-group {
        padding: 10px;
        border-radius: 10px;
        box-shadow: 0 20px 15px rgba(0, 0, 0, .1);
    }

    .accordion-toggle {

        color: black;
    }

    .accordion-toggle:hover {
        text-decoration: none;

    }

    .accordion-heading .accordion-toggle {
        display: block;
        padding: 8px 15px;
    }
</style>

<!------------code php connexion ala bdd---------->

<!------------------------------------------------>


    <body class="antialiased">
        @yield('content')
    </body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
                    <!-- Core theme JS-->
                    <script src="{{asset('./js/scripts.js')}}"></script>
                    <script src="{{asset('./js/jquery-3.6.0.js')}}"></script>
                    <script src="{{asset('./js/bootstrap.min.js')}}"></script>
                    <script src="{{asset('./js/bootstrap.js')}}"></script>
                    <script src="{{asset('./js/jquery.min.js')}}"></script>

                    <script src="{{asset('./js/jquery.dataTables.min.js')}}"></script>
                    
                    <script src="{{asset('./js/toastr.js')}}"></script>

                    @if ($errors->any())
                     @foreach($errors->all() as $error)
                     <script>toastr.info("{{$error}}")</script>
                     @endforeach
                    @endif
                    <script>
                        $(document).ready(function () {
                            $('#dtBasicExample').DataTable();
                        });
  
                    </script>
</html>
