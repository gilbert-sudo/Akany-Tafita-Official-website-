<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$pageTitle;?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <!-- Theme style -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  
  <style type="text/css">
    .material-symbols-outlined {
      font-size: 18px;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
         <img src="views/icons/disconnect.png"  width="20" height="20">
        </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light" >Akany TAFITASOA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Admin</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a id="home" href="index.php?controller=Home&task=index" class=" nav-link ">
              <i class="fa-solid fa-house"></i>
                <p>
                  Accueil
                </p>
              </a>
            </li>

            <li class=" nav-item">
              <a id="event" href="#" class=" nav-link ">
              <i class="fa-solid fa-calendar-days"></i>
                <p>
                  Evenement
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul id="link1" class="nav nav-treeview " style="display: none;">
                <li class="nav-item">
                  <a id="event1" href="index.php?controller=Events&task=addEvent" class="nav-link  ">
                    <i class="fa-solid fa-calendar-plus"></i>
                    <p>Ajouter un événement</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a id="event2" href="index.php?controller=Events&task=manageEvent" class="nav-link">
                  <img src="./views/icons/manageEvent.png" width="20px" height="20px"/>
                    <p>Gérer les événements</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a id="gift" href="#" class=" nav-link">
                <i class="fa-solid fa-circle-dollar-to-slot"></i>
                <p>
                  Don
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul id="link2"  class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a id="gift1" href="index.php?controller=donation&task=ask" class="nav-link ">
                    <i class="nav-icon fas fa-hand-holding-usd"></i>
                    <p>Demande de don</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a id="gift2"  href="index.php?controller=donation&task=index" class="nav-link ">
                    <i class="fa-solid fa-filter-circle-dollar"></i>
                    <p>Gerer les dons</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a id="responsible" href="#" class=" nav-link ">
                <i class="fa-solid fa-users-between-lines"></i>
                <p>
                  Gestion des responsables
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul id="link3"  class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a id="responsible1" href="index.php?controller=responsible&task=addResponsible" class="nav-link  ">
                    <i class="fa-solid fa-user-plus"></i>
                    <p>Ajouter un responsables</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a id="responsible2"  href="index.php?controller=responsible&task=manageResponsible" class="nav-link ">
                    <i class="fa-solid fa-hands-holding-child"></i>
                    <p>Gérer les responsables</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a id="witness" href="#" class=" nav-link">

                <i class="fa-regular fa-eye"></i>
                <p>
                  Gestion des temoignages
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul id="link4" class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a id="witness1" href="index.php?controller=witness&task=addWitness" class="nav-link ">
                    <i ><img src="./views/icons/eye.png" alt="" width="20" height="20"></i>
                    <p>Ajouter un témoignage</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a id="witness2" href="index.php?controller=witness&task=manageWitness" class="nav-link  ">
                  <i class="fa-solid fa-arrows-to-eye"></i>
                    <p>Gérer les témoignages</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a  href="#" id="blog"  class=" nav-link ">
                <img src="./views/icons/blog.png" width="20" heigth="20">
                <p>
                  Gestion des blogs
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul id="link5"  class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="index.php?controller=blog&task=addBlog" id="blog1" class="nav-link  ">
                  <i class="fa-solid fa-blog"></i>
                    <p>Ajouter un blog</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=blog&task=manageBlog" id="blog2"  class="nav-link ">
                  <i class="fa-brands fa-blogger"></i>
                    <p>Gérer les blogs</p>
                  </a>
                </li>
              </ul>
            </li>
            </li>

            <li>
              <a id="email"  href="index.php?controller=mailbox&task=index" class=" nav-link ">
                <i class="fa-solid fa-envelope"></i>
                <p>
                  Boîte E-mail
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
            </li>

            <li class="nav-item menu-is-opening menu-open">
              <a id="settings" href="#" class=" nav-link ">
                <img src="./views/icons/admin.png" width="20px" height="20px" alt="" class="src">
                <p>
                  Paramètre
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul id="link6" class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a id="setting1" href="index.php?controller=admin&task=general" class="nav-link  ">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <p>Général</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a id="setting2" href="index.php?controller=contact&task=updateContact" class="nav-link  ">
                    <i class="fa-solid fa-square-pen"></i>
                    <p>Mise à jour des contacts</p>
                  </a>
                </li>
              </ul>
            </li>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $pageTitle ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active"><?= $pageTitle ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <?= $pageContent ?>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2021 <a href="#">by GILBERT</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->


  <!-- REQUIRED SCRIPTS -->

  <script src="https://unpkg.com/feather-icons"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

  <!-- Latest compiled and minified Bootstrap JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Initialize Bootstrap functionality -->
  <script>
    // Initialize tooltip component
    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })

    // Initialize popover component
    $(function() {
      $('[data-toggle="popover"]').popover()
    })
  </script>
  <script src="https://kit.fontawesome.com/9979a01860.js" crossorigin="anonymous"></script>
  <script src="./views/javascript/event.js"></script>
</body>

</html>