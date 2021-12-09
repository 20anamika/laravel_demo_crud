<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
      <meta name="author" content="Creative Tim">
      <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
      <!-- Favicon -->
      <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">
      <!-- Fonts -->
      <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')}}">
      <!-- Icons -->
      <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
      <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
      <!-- Page plugins -->
      <!-- Argon CSS -->
      <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0')}}" type="text/css">
   </head>
   <body>
      <!-- Sidenav -->
      <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
         <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header  align-items-center">
               <a class="navbar-brand" href="javascript:void(0)">
               <img src="{{asset('assets/img/brand/blue.png')}}" class="navbar-brand-img" alt="...">
               </a>
            </div>
            <div class="navbar-inner">
            </div>
         </div>
      </nav>
      <!-- Main content -->
      <div class="main-content" id="panel">
         <!-- Topnav -->
         <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
            <div class="container-fluid">
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Search form -->
                  <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                     <div class="form-group mb-0">
                        <div class="input-group input-group-alternative input-group-merge">
                           <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fas fa-search"></i></span>
                           </div>
                           <input class="form-control" placeholder="Search" type="text">
                        </div>
                     </div>
                     <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                  </form>
                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center  ml-md-auto ">
                     <li class="nav-item d-xl-none">
                        <!-- Sidenav toggler -->
                     </li>
                     <li class="nav-item d-sm-none">
                        <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                        <i class="ni ni-zoom-split-in"></i>
                        </a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                        </a>
                     </li>
                  </ul>
                  <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                     <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           <div class="media align-items-center">
                              <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" src="{{asset('assets/img/theme/team-4.jpg')}}">
                              </span>
                              <div class="media-body  ml-2  d-none d-lg-block">
                                 <span class="mb-0 text-sm  font-weight-bold">John Snow</span>
                              </div>
                           </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                           <div class="dropdown-header noti-title">
                              <h6 class="text-overflow m-0">Welcome!</h6>
                           </div>
                           <a href="#!" class="dropdown-item">
                           <i class="ni ni-single-02"></i>
                           <span>My profile</span>
                           </a>
                           <!-- <a href="#!" class="dropdown-item">
                              <i class="ni ni-settings-gear-65"></i>
                              <span>Settings</span>
                              </a> -->
                           <a href="#!" class="dropdown-item">
                           <i class="ni ni-calendar-grid-58"></i>
                           <span>Activity</span>
                           </a>
                           <!-- <a href="#!" class="dropdown-item">
                              <i class="ni ni-support-16"></i>
                              <span>Support</span>
                              </a> -->
                           <div class="dropdown-divider"></div>
                           <a href="#!" class="dropdown-item">
                           <i class="ni ni-user-run"></i>
                           <span>Logout</span>
                           </a>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <!-- Header -->
         <!-- Header -->
         <div class="header bg-primary pb-6">
            <div class="container-fluid">
               <div class="header-body">
                  <div class="row align-items-center py-4">
                     <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                           <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                              <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                              <li class="breadcrumb-item"><a href="#">Dashboards</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Default</li>
                           </ol>
                        </nav>
                     </div>
                     <div class="col-lg-6 col-5 text-right">
                        <a href="{{route('customers.create')}}" class="btn btn-sm btn-neutral">New Customer</a>
                        <a href="#" class="btn btn-sm btn-neutral">Filters</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</html>