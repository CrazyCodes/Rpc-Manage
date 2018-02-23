<!DOCTYPE html>
<html>
<head>
    @inject('manageMenuPresenter','App\Presenters\ManageMenuPresenter')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{env ('APP_NAME')}} - {{$manageMenuPresenter->getManageMenuNameForUrl()}}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset ('resource/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset ('resource/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset ('resource/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset ('resource/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset ('resource/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset ('resource/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{ asset('resource/bower_components/html5shiv.min.js') }}"></script>
    <script src="{{ asset ('resource/bower_components/respond.min.js') }}"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('stylesheet')

</head>
<body class="skin-blue fixed sidebar-mini sidebar-mini-expand-feature">
<div class="wrapper">
    @section('header')
        @include('public.header')
    @show
    @section('navigation')
        @include('public.navigation')
    @show

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{$manageMenuPresenter->getManageMenuNameForUrl()}}
                <small>Version 1.0</small>
            </h1>

            <ol class="breadcrumb">
                <i class="fa fa-dashboard"></i>
                @foreach($manageMenuPresenter->getManageMenuTreeForUrl() as $key=>$value)
                    <li><a href="{{$value}}"> {{$key}}</a></li>
                @endforeach
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section>
    </div>
    @section('footer')
        @include('public.footer')
    @show
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{asset ('resource/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset ('resource/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset ('resource/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('resource/dist/js/adminlte.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset ('resource/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap  -->
<script src="{{asset ('resource/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset ('resource/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset ('resource/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset ('resource/bower_components/chart.js/Chart.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset ('resource/dist/js/pages/dashboard2.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset ('resource/dist/js/demo.js')}}"></script>
@yield('script')

</body>
</html>
