<!doctype html>
<html lang="{{ config('app.locale') }}" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Accounts | Daffodil Polytechnic Institute</title>
    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('/js/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!-- Icons -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Fonts and Styles -->
    @yield('css_before')
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">

    @yield('css_after')

    <script>window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!};</script>
</head>

<body>

<div id="page-container" class="">

    <main id="main-container">
        @yield('content')
    </main>


    <footer id="page-footer" class="opacity-0">
        <div class="content py-20 font-size-xs clearfix">
            <div class="float-right">
                Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://bsdi-bd.org/" target="_blank">BSDI WEB TEAM</a>
            </div>
            <div class="float-left">
                <a class="font-w600" href="#" target="_blank">DPI Accounts</a> &copy; <span class="js-year-copy"></span>
            </div>
        </div>
    </footer>
</div>


<!-- Codebase Core JS -->
<script src="../js/codebase.core.min-3.2.js"></script>
<script src="{{ mix('js/codebase.app.js') }}"></script>

<!-- <script type="text/javascript" src="{{ asset('/js/codebase.core.min-3.2.js') }}"></script> -->
<!-- <link href="" rel="stylesheet"> -->



<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/pages/be_tables_datatables.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>

<script src="../js/plugins/chartjs/Chart.bundle.min.js"></script>
<script src="../js/plugins/slick/slick.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.pie.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.stack.min.js"></script>

<script type="text/javascript" src="https://demo.pixelcave.com/codebase/assets/js/plugins/flot/jquery.flot.resize.min.js"></script>
<script type="text/javascript" src="js/pages/be_comp_charts.min.js"></script>
<script src="../js/pages/be_pages_dashboard.min.js"></script>

<script src="js/plugins/select2/js/select2.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>

<script src="js/plugins/select2/js/select2.full.min.js"></script>
<script>jQuery(function(){ Codebase.helpers(['datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>

<!-- Laravel Scaffolding JS -->
<script src="{{ mix('js/laravel.app.js') }}"></script>
@yield('js_after')
</body>
</html>
