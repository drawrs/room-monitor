<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $__env->yieldContent('title'); ?> | Cek Kamar</title>
    <!-- Tell the browser to be responsive to screen width -->
    <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.7 -->
      <link rel="stylesheet" href="<?php echo e(url('AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo e(url('AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo e(url('AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css')); ?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo e(url('AdminLTE-2.4.2/dist/css/AdminLTE.min.css')); ?>">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="<?php echo e(url('AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css')); ?>">

    <!-- <script src='<?php echo e(URL::to('js/jquery-3.0.0.min.js')); ?>'></script> -->
    <?php echo $__env->yieldContent('script'); ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini layout-boxed">
    <!-- Site wrapper -->
    <div class="wrapper">
      <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>B</b>MT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Dash</b>board</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You Fake messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        User
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>message</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo e(URL::to('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">

                <p>
                  HHHHH
                  <small>SSSSSs</small>
                </p>
              </li>
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <!-- <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div> -->
                <div class="pull-right">
                  <a href="<?php echo e(URL::to('/logout')); ?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
            
        </ul>
      </div>
    </nav>
  </header>
      <!-- =============================================== -->
      <!-- Left side column. contains the sidebar -->
     <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo e(URL::to('admin/dist/img/user2-160x160.jpg')); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <?php if(Auth::user()): ?>
            <p><?php echo e(Auth::user()->name); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          <?php else: ?>
          <p>SELAMAT DATANG</p>
          <?php endif; ?>
         <!--  <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
      <?php if(Auth::user()): ?>
        <li >
          <a href="<?php echo e(url('/')); ?>">
            <i class="fa fa-files-o"></i>
            <span>Lihat Kamar</span>
          </a>
        </li>
        <li>
          <a href="<?php echo e(url('tambah-kamar')); ?>">
            <i class="fa fa-files-o"></i>
            <span>Tambah Kamar</span>
          </a>
        </li>

        <li >
          <a href="<?php echo e(url('rekap-kamar')); ?>">
            <i class="fa fa-files-o"></i>
            <span>Rekap Kamar</span>
          </a>
        </li>
    
        <li>

          <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
              <?php echo e(csrf_field()); ?>

          </form>
          <a href="<?php echo e(route('logout')); ?>"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
            <i class="fa fa-files-o"></i>
            <span>Logout</span>
          </a>
        </li>
      <?php else: ?>
        <li >
          <a href="<?php echo e(url('login')); ?>">
            <i class="fa fa-files-o"></i>
            <span>LOGIN</span>
          </a>
        </li>
      <?php endif; ?>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
      <!-- =============================================== -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
            TUGAS KULIAH
            </h1>
            <ol class="breadcrumb">
              <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="">Dashboard</a></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
          <!-- Default box -->
          
            <?php echo $__env->yieldContent('content_main'); ?>
          
          <!-- /.box -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
    <div class="pull-right hidden-xs">
            <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://fb.me/rizal.ofdraw" target="_blank">Rizal Khilman</a>.</strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.0 -->
<!-- jQuery 3 -->
<script src="<?php echo e(url('AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(url('AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(url('AdminLTE-2.4.2/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(url('AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('AdminLTE-2.4.2/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(url('AdminLTE-2.4.2/dist/js/demo.js')); ?>"></script>
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
      var token = '<?php echo e(csrf_token()); ?>';

      $.post('<?php echo e(url('tambah-properti')); ?>', {kamar_id: kamar_id, judul : new_properti, _token: token }, function(data, textStatus, xhr) {
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
    <!-- AdminLTE for demo purposes
    
  --></body>
</html>