
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>| Home Pantry 2.0 |</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    
    <link rel="stylesheet" href="<?php echo base_url('vendor/css/custom.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('vendor/css/nprogress.css') ?>">
    
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome-free/css/all.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/adminlte.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet"
        href="<?php echo base_url('assets/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <!-- Include the Bootstrap Table  CSS for the table -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
    <!-- favicon -->
    <!--<link rel="icon" type="image/png" sizes="48x48" href="<?php echo base_url('favicon.ico') ?>">-->
    <link rel="icon"
        href="https://atenasconsultores.com/wp-content/uploads/2020/12/cropped-emblemaAtenasColor-32x32.png"
        sizes="32x32" />
    <!-- Selectpicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/selectpicker/css/bootstrap-select.css') ?>">
    <!-- Include tabulator the table -->
    <link href="https://unpkg.com/tabulator-tables@4.9.3/dist/css/tabulator.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/tabulator_modern.min.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.css" integrity="sha512-b3Wb3Os4sxJRdYkfCWtFjvuN/OlfBNtBGJknON+zbxU6M7GRYdII8m1W7TMsls/kwuwtq1wt7TvuF58Sd/4AGg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to to the body tag
to get the desired effect
|---------------------------------------------------------|
|LAYOUT OPTIONS | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('Principal/dashboard')?>" class="brand-link">
        <img src="<?php echo base_url('dist/img/cropped-emblemaAtenasColor-32x32.png')?>" alt="Atenas"
            class="brand-image img-thumbnail elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Home Pantry</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            
            <div class="image">
                <img src="<?php echo base_url('dist/img/prueba.png')?>" class="img-circle elevation-2"
                    alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block"><p id="usuario"></p></a>
            </div>
        </div>

      <!-- Sidebar Menu -->
      
        <?php 
            $this->load->view('Menu/Menu');
        ?>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
    
    
<!-- jQuery -->

</body>
</html>
