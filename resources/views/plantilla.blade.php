<!DOCTYPE html>
<html>
<head>
    <title>Ferretería</title></title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">   
    <!--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->

    <link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="/mdb/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="/mdb/css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="/mdb/css/style.css" rel="stylesheet">

    <link href="css/bootstrap-select.min.css" rel="stylesheet">
</head>
<body>
    <!--
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>-->
    <script type="text/javascript" src="/js/jquery-3.4.1.min.js"></script>
    @stack('scripts')
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="/mdb/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="/mdb/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="/mdb/js/mdb.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap-select.min.js"></script>
    <script src="/js/all.js"></script>

    <header>
        @include('parciales/navbar')
    </header>
        @yield('content')  

    <footer class="page-footer font-small  deep-purple pt-5">
        @include('parciales/footer')
    </footer>
</body>
</html>