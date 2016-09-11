<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sachin's Base Starter Application</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/css/select2.min.css">
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.2/css/bootstrap.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">

    <!-- Styles -->
    @yield('styles')

    <style>
        body { font-family: 'Lato'; }
        .fa-btn { margin-right: 6px; }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
</head>
<body id="app-layout">
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ elixir('js/all.js') }}"></script>

    <!-- Navigation Bar -->
    @include('common.nav')

    <!-- Content -->
    @yield('content')

    <style>
        form {margin: 0px;}
        ul.pagination { margin: 0px !important; }
        ul.pagination li { margin: 0px !important; padding: 0px !important }
        div.dataTables_length select { padding: 5px !important; padding-right: 15px !important; }

        /* required fields have a red border */
        .errorClass { border:  1px solid red; }

        /* remove panel bottom margin */
        .panel { margin-bottom: 0px !important;  }
        button.btn { margin-right: 1px;}

        /* menu bar */
        .dropdown-submenu { position: relative; }
        .dropdown-submenu>.dropdown-menu { top: 0; left: 100%; margin-top: -6px; margin-left: -1px;
            -webkit-border-radius: 0 6px 6px 6px; -moz-border-radius: 0 6px 6px; border-radius: 0 6px 6px 6px; }

        .dropdown-submenu:hover>.dropdown-menu { display: block; }
        .dropdown-submenu>a:after { display: block; content: " "; float: right; width: 0; height: 0;
            border-color: transparent; border-style: solid; border-width: 5px 0 5px 5px; border-left-color: #ccc;
            margin-top: 5px; margin-right: -10px; }

        .dropdown-submenu:hover>a:after { border-left-color: #fff; }
        .dropdown-submenu.pull-left { float: none; }
        .dropdown-submenu.pull-left>.dropdown-menu { left: -100%; margin-left: 10px;
            -webkit-border-radius: 6px 0 6px 6px; -moz-border-radius: 6px 0 6px 6px; border-radius: 6px 0 6px 6px; }

    </style>

    <!-- Scripts -->
    @yield('scripts')

    <!-- Footer -->
    @yield('footer');
</body>
</html>
