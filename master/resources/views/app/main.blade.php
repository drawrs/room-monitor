<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ url('AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ url('AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('AdminLTE-2.4.2/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ url('AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .widget-user .widget-user-header {
        height: 300px;
    }
    .widget-user .widget-user-username {
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.71);
  }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  @include('includes.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  @include('includes.sidebar')
  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        LARAMART
        <small>Panel Control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Tambah Prodak</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content_main')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  @include('includes.footer')

  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ url('AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ url('AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('AdminLTE-2.4.2/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('AdminLTE-2.4.2/dist/js/demo.js')}}"></script>
<script src="https://unpkg.com/vue"></script>
<script src="https://unpkg.com/axios@0.12.0/dist/axios.min.js"></script>
  <script src="https://unpkg.com/lodash@4.13.1/lodash.min.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
    $('#add_properti').click(function(event) {
      /* Act on the event */
      var new_properti = $('#new_properti').val();
      var kamar_id = $('#kamar_id').val();
      var token = '{{ csrf_token() }}';

      $.post('{{ url('tambah-properti') }}', {kamar_id: kamar_id, judul : new_properti, _token: token }, function(data, textStatus, xhr) {
        console.log(data);
        if (data.status) {
          location.reload();
        }
        /*optional stuff to do after success */
      });
    });
  })
  function hapus_properti(){
    
  }
</script>

</body>
</html>

