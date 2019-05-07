<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/feather/feather.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/highlight.js/styles/vs2015.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/quill/dist/quill.core.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.css')}}">

    <!-- Theme CSS -->
      
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css')}}" id="stylesheetLight">

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.min.css')}}" id="stylesheetDark">

    <style>body { display: none; }</style>
    

    <title>Dashkit</title>
  </head>
  <body>

    <!-- MODALS
    ================================================== -->
    
    <!-- Modal: Demo -->
    <div class="modal fade fixed-right" id="modalDemo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <form class="modal-content" id="demoForm">
          <div class="modal-body">
        
            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

            <div class="text-center">
              <img src="{{ asset('assets/img/illustrations/designer-life.svg')}}" alt="..." class="img-fluid mb-3">
            </div>

            <h2 class="text-center mb-2">
              Make Dashkit Your Own
            </h2>

            <p class="text-center mb-4">
              Set preferences that will be cookied for your live preview demonstration.
            </p>

            <hr class="mb-4">

            <h4 class="mb-1">
              Color Scheme
            </h4>

            <p class="small text-muted mb-3">
              Overall light or dark presentation.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="colorScheme" id="colorSchemeLight" value="light" checked> <i class="fe fe-sun mr-2"></i> Light Mode
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="colorScheme" id="colorSchemeDark" value="dark"> <i class="fe fe-moon mr-2"></i> Dark Mode
              </label>
            </div>

            <h4 class="mb-1">
              Navigation Position
            </h4>

            <p class="small text-muted mb-3">
              Select the primary navigation paradigm for your app.
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="navPosition" id="navPositionSidenav" value="sidenav" checked> Sidenav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionTopnav" value="topnav"> Topnav
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="navPosition" id="navPositionCombo" value="combo"> Combo
              </label>
            </div>

            <h4 class="mb-1">
              Sidebar Color
            </h4>

            <p class="small text-muted mb-3">
              Usually dictated by the color scheme, but can be overriden. 
            </p>

            <div class="btn-group-toggle d-flex mb-4" data-toggle="buttons">
              <label class="btn btn-white active col">
                <input type="radio" name="sidebarColor" id="sidebarColorDefault" value="default" checked> Default
              </label>
              <label class="btn btn-white col ml-2">
                <input type="radio" name="sidebarColor" id="sidebarColorVibrant" value="vibrant"> Vibrant
              </label>
            </div>
      
          </div>
          <div class="modal-footer border-0">
        
            <button type="submit" class="btn btn-block btn-primary mt-auto">
              Preview
            </button>

          </div>
        </form>
      </div>
    </div>
    

    <!-- Modal: Members -->
    <div class="modal fade" id="modalMembers" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-card card" data-toggle="lists" data-lists-values='["name"]'>
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">

                  <!-- Title -->
                  <h4 class="card-header-title" id="exampleModalCenterTitle">
                    Add a member
                  </h4>
              
                </div>
                <div class="col-auto">

                  <!-- Close -->
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              
                </div>
              </div> <!-- / .row -->
            </div>
            <div class="card-header">
          
              <!-- Form -->
              <form>
                <div class="input-group input-group-flush input-group-merge">
                  <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <span class="fe fe-search"></span>
                    </div>
                  </div>
                </div>
              </form>

            </div>
            <div class="card-body">

              <!-- List group -->
              <ul class="list-group list-group-flush list my--3">
                <li class="list-group-item px-0">
              
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-5.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Miyah Myles</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
                  
                    </div>
                    <div class="col-auto">
                  
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">
              
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-6.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Ryu Duke</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-success">●</span> Online
                      </p>
                  
                    </div>
                    <div class="col-auto">
                  
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">
              
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-7.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Glen Rouse</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-warning">●</span> Busy
                      </p>
                  
                    </div>
                    <div class="col-auto">
                  
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
                <li class="list-group-item px-0">
              
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <a href="profile-posts.html" class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-8.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </a>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="mb-1 name">
                        <a href="profile-posts.html">Grace Gross</a>
                      </h4>

                      <!-- Time -->
                      <p class="small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>
                  
                    </div>
                    <div class="col-auto">
                  
                      <!-- Button -->
                      <a href="#!" class="btn btn-sm btn-white">
                        Add
                      </a>

                    </div>
                  </div> <!-- / .row -->

                </li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Search -->
    <div class="modal fade" id="sidebarModalSearch" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-body" data-toggle="lists" data-lists-values='["name"]'>
     
            <!-- Form -->
            <form class="mb-4">
              <div class="input-group input-group-merge">
                <input type="search" class="form-control form-control-prepended search" placeholder="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>

            <!-- List group -->
            <div class="my--3">
              <div class="list-group list-group-flush list">
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/teams/team-logo-1.jpg')}}" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Airbnb
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="team-overview.html" class="list-group-item px-0">
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/teams/team-logo-2.jpg')}}" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Medium Corporation
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="{{ asset('assets/img/avatars/projects/project-1.jpg')}}" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Homepage Redesign
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="{{ asset('assets/img/avatars/projects/project-2.jpg')}}" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Travels & Time
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="project-overview.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar avatar-4by3">
                        <img src="{{ asset('assets/img/avatars/projects/project-3.jpg')}}" alt="..." class="avatar-img rounded">
                      </div>

                    </div>
                    <div class="col ml--2">

                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Safari Exploration
                      </h4>

                      <!-- Time -->
                      <p class="small text-muted mb-0">
                        <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 4hr ago</time>
                      </p>
                  
                    </div>
                  </div> <!-- / .row -->
            
                </a>
                <a href="profile-posts.html" class="list-group-item px-0">
            
                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Dianna Smiley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-success">●</span> Online
                      </p>

                    </div>
                  </div> <!-- / .row -->

                </a>
                <a href="profile-posts.html" class="list-group-item px-0">

                  <div class="row align-items-center">
                    <div class="col-auto">
                  
                      <!-- Avatar -->
                      <div class="avatar">
                        <img src="{{ asset('assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                      </div>

                    </div>
                    <div class="col ml--2">
                  
                      <!-- Title -->
                      <h4 class="text-body mb-1 name">
                        Ab Hadley
                      </h4>

                      <!-- Status -->
                      <p class="text-body small mb-0">
                        <span class="text-danger">●</span> Offline
                      </p>

                    </div>
                  </div> <!-- / .row -->
            
                </a>
              </div>
            </div>
      
          </div>
        </div>
      </div>
    </div>

    <!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notifications
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>
        
          </div>
          <div class="modal-body">

            <!-- List group -->
            <div class="list-group list-group-flush my--3">
              <a class="list-group-item px-0" href="#!">
          
                <div class="row">
                  <div class="col-auto">
                
                    <!-- Avatar -->
                    <div class="avatar avatar-sm">
                      <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                    </div>

                  </div>
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      2m
                    </small>
                
                  </div>
                </div> <!-- / .row -->

              </a>
             
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- NAVIGATION
    ================================================== -->
    
      <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="index.html">
            <img src="{{ asset('assets/img/logo.png')}}" class="navbar-brand-img 
            mx-auto" alt="...">
          </a>

          <!-- User (xs) -->
          <div class="navbar-user d-md-none">

            <!-- Dropdown -->
            <div class="dropdown">
        
              <!-- Toggle -->
              <a href="#!" id="sidebarIcon" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-sm avatar-online">
                  <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="...">
                </div>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sidebarIcon">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse" id="sidebarCollapse">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <div class="input-group input-group-rounded input-group-merge">
                <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <span class="fe fe-search"></span>
                  </div>
                </div>
              </div>
            </form>
      
            <!-- Navigation -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Dashboards
                </a>
                <div class="collapse " id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="index.html" class="nav-link ">
                        Default
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-alt.html" class="nav-link ">
                        Alternative <span class="badge badge-soft-success ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarPages" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="sidebarPages">
                  <i class="fe fe-file"></i> Pages
                </a>
                <div class="collapse show" id="sidebarPages">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarProfile" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile">
                        Profile
                      </a>
                      <div class="collapse " id="sidebarProfile">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="profile-posts.html" class="nav-link ">
                              Posts
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-groups.html" class="nav-link ">
                              Groups
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="profile-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                            <li class="nav-item">
                            <a href="profile-subscribers.html" class="nav-link ">
                              Subscribers
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarProject" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProject">
                        Project
                      </a>
                      <div class="collapse " id="sidebarProject">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="project-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-files.html" class="nav-link ">
                              Files
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-reports.html" class="nav-link ">
                              Reports
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="project-new.html" class="nav-link ">
                              New project
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarTeam" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTeam">
                        Team
                      </a>
                      <div class="collapse " id="sidebarTeam">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="team-overview.html" class="nav-link ">
                              Overview
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-projects.html" class="nav-link ">
                              Projects
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-members.html" class="nav-link ">
                              Members
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="team-new.html" class="nav-link ">
                              New team
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="orders.html" class="nav-link active">
                        Orders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="feed.html" class="nav-link ">
                        Feed
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="settings.html" class="nav-link ">
                        Settings
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="invoice.html" class="nav-link ">
                        Invoice
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="pricing.html" class="nav-link ">
                        Pricing
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sidebarAuth" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                  <i class="fe fe-user"></i> Authentication
                </a>
                <div class="collapse" id="sidebarAuth">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="#sidebarSignIn" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn">
                        Sign in
                      </a>
                      <div class="collapse" id="sidebarSignIn">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-in-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-in.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarSignUp" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                        Sign up
                      </a>
                      <div class="collapse" id="sidebarSignUp">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="sign-up-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="sign-up.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarPassword" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPassword">
                        Password reset
                      </a>
                      <div class="collapse" id="sidebarPassword">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="password-reset-cover.html" class="nav-link">
                              Cover
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="password-reset.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#sidebarError" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarError">
                        Error
                      </a>
                      <div class="collapse" id="sidebarError">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a href="error-illustration.html" class="nav-link">
                              Illustration
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="error.html" class="nav-link">
                              Basic
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                 <span class="fe fe-bell"></span> Notifications
                </a>
              </li>
            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Documentation
            </h6>

            <!-- Navigation -->
            <ul class="navbar-nav mb-md-4">
              <li class="nav-item">
                <a class="nav-link " href="getting-started.html">
                  <i class="fe fe-clipboard"></i> Getting started
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#sidebarComponents" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarComponents">
                  <i class="fe fe-book-open"></i> Components
                </a>
                <div class="collapse " id="sidebarComponents">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="components.html#alerts" class="nav-link">
                        Alerts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#avatars" class="nav-link">
                        Avatars
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#badges" class="nav-link">
                        Badges
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#breadcrumb" class="nav-link">
                        Breadcrumb
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#buttons" class="nav-link">
                        Buttons
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#button-group" class="nav-link">
                        Button group
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#cards" class="nav-link">
                        Cards
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#charts" class="nav-link">
                        Charts
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#dropdowns" class="nav-link">
                        Dropdowns
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#forms" class="nav-link">
                        Forms
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#icons" class="nav-link">
                        Icons
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#lists" class="nav-link">
                        Lists
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#loaders" class="nav-link">
                        Loaders
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#modal" class="nav-link">
                        Modal
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#navs" class="nav-link">
                        Navs
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#navbarExample" class="nav-link">
                        Navbar
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#page-headers" class="nav-link">
                        Page headers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#pagination" class="nav-link">
                        Pagination
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#popovers" class="nav-link">
                        Popovers
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#progress" class="nav-link">
                        Progress
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#social-posts" class="nav-link">
                        Social post
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#tables" class="nav-link">
                        Tables
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#tooltips" class="nav-link">
                        Tooltips
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#typography" class="nav-link">
                        Typography
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="components.html#utilities" class="nav-link">
                        Utilities
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="changelog.html">
                  <i class="fe fe-git-branch"></i> Changelog <span class="badge badge-primary ml-auto">v1.3.1</span>
                </a>
              </li>
            </ul>
      
            <!-- Push content down -->
            <div class="mt-auto"></div>
      
            
            <!-- Customize -->
            <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
              <i class="fe fe-sliders mr-2"></i> Customize
            </a>
            
      
            
            <!-- User (md) -->
            <div class="navbar-user d-none d-md-flex" id="sidebarUser">
        
              <!-- Icon -->
              <a href="#sidebarModalActivity" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Dropup -->
              <div class="dropup">
          
                <!-- Toggle -->
                <a href="#!" id="sidebarIconCopy" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-sm avatar-online">
                    <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" class="avatar-img rounded-circle" alt="...">
                  </div>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu" aria-labelledby="sidebarIconCopy">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

              <!-- Icon -->
              <a href="#sidebarModalSearch" class="navbar-user-link" data-toggle="modal">
                <span class="icon">
                  <i class="fe fe-search"></i>
                </span>
              </a>

            </div>
            

          </div> <!-- / .navbar-collapse -->

        </div>
      </nav>
    
    
      <nav class="navbar navbar-expand-lg navbar-light" id="topnav">
        <div class="container">

          <!-- Toggler -->
          <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand mr-auto" href="index.html">
            <img src="{{ asset('assets/img/logo.svg')}}" alt="..." class="navbar-brand-img">
          </a>

          <!-- Form -->
          <form class="form-inline mr-4 d-none d-lg-flex">
            <div class="input-group input-group-rounded input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

              <!-- Input -->
              <input type="search" class="form-control form-control-prepended  dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fe fe-search"></i>
                </div>
              </div>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-card">
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush list my--3">
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="{{ asset('assets/img/avatars/teams/team-logo-1.jpg')}}" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Airbnb
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->
                    </a>
                    <a href="team-overview.html" class="list-group-item px-0">
                      <div class="row align-items-center">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar">
                            <img src="{{ asset('assets/img/avatars/teams/team-logo-2.jpg')}}" alt="..." class="avatar-img rounded">
                          </div>

                        </div>
                        <div class="col ml--2">

                          <!-- Title -->
                          <h4 class="text-body mb-1 name">
                            Medium Corporation
                          </h4>

                          <!-- Time -->
                          <p class="small text-muted mb-0">
                            <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                          </p>
                    
                        </div>
                      </div> <!-- / .row -->
                    </a>
                    
                  </div>
          
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>
          </form>

          <!-- User -->
          <div class="navbar-user">
      
            <!-- Dropdown -->
            <div class="dropdown mr-4 d-none d-lg-flex">
        
              <!-- Toggle -->
              <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon active">
                  <i class="fe fe-bell"></i>
                </span>
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                
                      <!-- Title -->
                      <h5 class="card-header-title">
                        Notifications
                      </h5>

                    </div>
                    <div class="col-auto">
                
                      <!-- Link -->
                      <a href="#!" class="small">
                        View all
                      </a>

                    </div>
                  </div> <!-- / .row -->
                </div> <!-- / .card-header -->
                <div class="card-body">

                  <!-- List group -->
                  <div class="list-group list-group-flush my--3">
                    <a class="list-group-item px-0" href="#!">
              
                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">
                    
                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>
                    
                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="{{ asset('assets/img/avatars/profiles/avatar-2.jpg') }}" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">
                    
                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>
                    
                        </div>
                      </div> <!-- / .row -->

                    </a>
                    <a class="list-group-item px-0" href="#!">

                      <div class="row">
                        <div class="col-auto">
                    
                          <!-- Avatar -->
                          <div class="avatar avatar-sm">
                            <img src="{{ asset('assets/img/avatars/profiles/avatar-3.jpg')}}" alt="..." class="avatar-img rounded-circle">
                          </div>

                        </div>
                        <div class="col ml--2">
                    
                          <!-- Content -->
                          <div class="small text-muted">
                            <strong class="text-body">Adolfo Hess</strong> commented <blockquote class="text-body">“I don’t think this really makes sense to do without approval from Johnathan since he’s the one...” </blockquote>
                          </div>

                        </div>
                        <div class="col-auto">

                          <small class="text-muted">
                            2m
                          </small>
                    
                        </div>
                      </div> <!-- / .row -->

                    </a>
                    
                  </div>
            
                </div>
              </div> <!-- / .dropdown-menu -->

            </div>

            <!-- Dropdown -->
            <div class="dropdown">
        
              <!-- Toggle -->
              <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
              </a>

              <!-- Menu -->
              <div class="dropdown-menu dropdown-menu-right">
                <a href="profile-posts.html" class="dropdown-item">Profile</a>
                <a href="settings.html" class="dropdown-item">Settings</a>
                <hr class="dropdown-divider">
                <a href="sign-in.html" class="dropdown-item">Logout</a>
              </div>

            </div>

          </div>

          <!-- Collapse -->
          <div class="collapse navbar-collapse mr-auto order-lg-first" id="navbar">

            <!-- Form -->
            <form class="mt-4 mb-3 d-md-none">
              <input type="search" class="form-control form-control-rounded" placeholder="Search" aria-label="Search">
            </form>

            <!-- Navigation -->
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavDashboards" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dashboards
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDashboards">
                  <li>
                    <a class="dropdown-item " href="index.html">
                      Default
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="dashboard-alt.html">
                      Alternative
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="topnavPages" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pages
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavPages">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#" id="topnavProfile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profile
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProfile">
                      <a class="dropdown-item " href="profile-posts.html">
                        Posts
                      </a>
                      <a class="dropdown-item " href="profile-groups.html">
                        Groups
                      </a>
                      <a class="dropdown-item " href="profile-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="profile-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="profile-subscribers.html">
                        Subscribers
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#!" id="topnavProject" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Project
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavProject">
                      <a class="dropdown-item " href="project-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="project-files.html">
                        Files
                      </a>
                      <a class="dropdown-item " href="project-reports.html">
                        Reports
                      </a>
                      <a class="dropdown-item " href="project-new.html">
                        New project
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle " href="#!" id="topnavTeam" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Team
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavTeam">
                      <a class="dropdown-item " href="team-overview.html">
                        Overview
                      </a>
                      <a class="dropdown-item " href="team-projects.html">
                        Projects
                      </a>
                      <a class="dropdown-item " href="team-members.html">
                        Members
                      </a>
                      <a class="dropdown-item " href="team-new.html">
                        New team
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="dropdown-item active" href="orders.html">
                      Orders
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="feed.html">
                      Feed
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="settings.html">
                      Settings
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="invoice.html">
                      Invoice
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="pricing.html">
                      Pricing
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="topnavAuth" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Auth
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavAuth">
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavSignIn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign in
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignIn">
                      <a class="dropdown-item" href="sign-in-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-in-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-in-basics.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavSignUp" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Sign up
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavSignUp">
                      <a class="dropdown-item" href="sign-up-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="sign-up-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="sign-up.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavPassword" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Password reset
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavPassword">
                      <a class="dropdown-item" href="password-reset-cover.html">
                        Cover
                      </a>
                      <a class="dropdown-item" href="password-reset-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="password-reset.html">
                        Basic
                      </a>
                    </div>
                  </li>
                  <li class="dropright">
                    <a class="dropdown-item dropdown-toggle" href="#!" id="topnavError" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Error
                    </a>
                    <div class="dropdown-menu" aria-labelledby="topnavError">
                      <a class="dropdown-item" href="error-illustration.html">
                        Illustration
                      </a>
                      <a class="dropdown-item" href="error.html">
                        Basic
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" id="topnavDocumentation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Docs
                </a>
                <ul class="dropdown-menu" aria-labelledby="topnavDocumentation">
                  <li>
                    <a class="dropdown-item " href="getting-started.html">
                      Getting started
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="components.html">
                      Components
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item " href="changelog.html">
                      Changelog
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#modalDemo" data-toggle="modal">
                  Customize
                </a>
              </li>
            </ul>

          </div>

        </div> <!-- / .container -->
      </nav>
    

    <!-- MAIN CONTENT
    ================================================== -->
    <div class="main-content">

      
        <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
          <div class="container-fluid">

            <!-- Form -->
            <form class="form-inline mr-4 d-none d-md-flex">
              <div class="input-group input-group-flush input-group-merge" data-toggle="lists" data-lists-values='["name"]'>

                <!-- Input -->
                <input type="search" class="form-control form-control-prepended dropdown-toggle search" data-toggle="dropdown" placeholder="Search" aria-label="Search">
                <div class="input-group-prepend">
                  <div class="input-group-text">
                    <i class="fe fe-search"></i>
                  </div>
                </div>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-card">
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush list my--3">
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/teams/team-logo-1.jpg')}}" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Airbnb
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->
                      </a>
                      <a href="team-overview.html" class="list-group-item px-0">
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/teams/team-logo-2.jpg')}}" alt="..." class="avatar-img rounded">
                            </div>

                          </div>
                          <div class="col ml--2">

                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Medium Corporation
                            </h4>

                            <!-- Time -->
                            <p class="small text-muted mb-0">
                              <span class="fe fe-clock"></span> <time datetime="2018-05-24">Updated 2hr ago</time>
                            </p>
                    
                          </div>
                        </div> <!-- / .row -->
                      </a>
                      
                      <a href="profile-posts.html" class="list-group-item px-0">
              
                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">
                    
                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Dianna Smiley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-success">●</span> Online
                            </p>

                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a href="profile-posts.html" class="list-group-item px-0">

                        <div class="row align-items-center">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar">
                              <img src="{{ asset('assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">
                    
                            <!-- Title -->
                            <h4 class="text-body mb-1 name">
                              Ab Hadley
                            </h4>

                            <!-- Status -->
                            <p class="text-body small mb-0">
                              <span class="text-danger">●</span> Offline
                            </p>

                          </div>
                        </div> <!-- / .row -->
              
                      </a>
                    </div>
          
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>
            </form>

            <!-- User -->
            <div class="navbar-user">
      
              <!-- Dropdown -->
              <div class="dropdown mr-4 d-none d-md-flex">
        
                <!-- Toggle -->
                <a href="#" class="text-muted" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="icon active">
                    <i class="fe fe-bell"></i>
                  </span>
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card">
                  <div class="card-header">
                    <div class="row align-items-center">
                      <div class="col">
                
                        <!-- Title -->
                        <h5 class="card-header-title">
                          Notifications
                        </h5>

                      </div>
                      <div class="col-auto">
                
                        <!-- Link -->
                        <a href="#!" class="small">
                          View all
                        </a>

                      </div>
                    </div> <!-- / .row -->
                  </div> <!-- / .card-header -->
                  <div class="card-body">

                    <!-- List group -->
                    <div class="list-group list-group-flush my--3">
                      <a class="list-group-item px-0" href="#!">
              
                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Dianna Smiley</strong> shared your post with <strong class="text-body">Ab Hadley</strong>, <strong class="text-body">Adolfo Hess</strong>, and <strong class="text-body">3 others</strong>.
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      <a class="list-group-item px-0" href="#!">

                        <div class="row">
                          <div class="col-auto">
                    
                            <!-- Avatar -->
                            <div class="avatar avatar-sm">
                              <img src="{{ asset('assets/img/avatars/profiles/avatar-2.jpg')}}" alt="..." class="avatar-img rounded-circle">
                            </div>

                          </div>
                          <div class="col ml--2">
                    
                            <!-- Content -->
                            <div class="small text-muted">
                              <strong class="text-body">Ab Hadley</strong> reacted to your post with a 😍
                            </div>

                          </div>
                          <div class="col-auto">

                            <small class="text-muted">
                              2m
                            </small>
                    
                          </div>
                        </div> <!-- / .row -->

                      </a>
                      
                    </div>
            
                  </div>
                </div> <!-- / .dropdown-menu -->

              </div>

              <!-- Dropdown -->
              <div class="dropdown">
        
                <!-- Toggle -->
                <a href="#" class="avatar avatar-sm avatar-online dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="{{ asset('assets/img/avatars/profiles/avatar-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </a>

                <!-- Menu -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="profile-posts.html" class="dropdown-item">Profile</a>
                  <a href="settings.html" class="dropdown-item">Settings</a>
                  <hr class="dropdown-divider">
                  <a href="sign-in.html" class="dropdown-item">Logout</a>
                </div>

              </div>

            </div>
  
          </div>
        </nav>
      

      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            
            <!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Overview
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Orders
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">
                      New order
                    </a>
                    
                  </div>
                </div> <!-- / .row -->
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" class="nav-link active">
                          All <span class="badge badge-pill badge-soft-secondary">823</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Pending <span class="badge badge-pill badge-soft-secondary">24</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Processing <span class="badge badge-pill badge-soft-secondary">3</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Refunded <span class="badge badge-pill badge-soft-secondary">71</span>
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Search -->
                    <form class="row align-items-center">
                      <div class="col-auto pr-0">
                        <span class="fe fe-search text-muted"></span>
                      </div>
                      <div class="col">
                          <input type="search" class="form-control form-control-flush search" placeholder="Search">
                      </div>
                    </form>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->

                    <div class="dropdown">
                      <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bulk action
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                        <a class="dropdown-item" href="#!">Something else here</a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectAll">
                          <label class="custom-control-label" for="ordersSelectAll">
                            &nbsp;
                          </label>
                        </div>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Order
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Product
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-total">
                          Total
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-status">
                          Status
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Payment method
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6520
                      </td>
                      <td class="orders-product">
                        5' x 3' Wall Poster
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-30">07/30/18</time>
                      </td>
                      <td class="orders-total">
                        $55.25
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectTwo">
                          <label class="custom-control-label" for="ordersSelectTwo">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6521
                      </td>
                      <td class="orders-product">
                        XL Logo Tee
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-30">07/30/18</time>
                      </td>
                      <td class="orders-total">
                        $14.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectThree">
                          <label class="custom-control-label" for="ordersSelectThree">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6522
                      </td>
                      <td class="orders-product">
                        Flexfit Hat
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-28">07/28/18</time>
                      </td>
                      <td class="orders-total">
                        $25.50
                      </td>
                      <td class="orders-sratus">
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>
                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectFour">
                          <label class="custom-control-label" for="ordersSelectFour">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6523
                      </td>
                      <td class="orders-product">
                        Reversible Hoodie
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-27">07/27/18</time>
                      </td>
                      <td class="orders-total">
                        $64.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-danger">
                          Cancelled
                        </div>
                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectFive">
                          <label class="custom-control-label" for="ordersSelectFive">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6524
                      </td>
                      <td class="orders-product">
                        Geometric Print Shorts
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-25">07/25/18</time>
                      </td>
                      <td class="orders-total">
                        $31.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6525
                      </td>
                      <td class="orders-product">
                        Super Mug
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-22">07/22/18</time>
                      </td>
                      <td class="orders-total">
                        $9.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectTwo">
                          <label class="custom-control-label" for="ordersSelectTwo">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6526
                      </td>
                      <td class="orders-product">
                        MD Pocket Tee
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-22">07/22/18</time>
                      </td>
                      <td class="orders-total">
                        $19.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>
                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectThree">
                          <label class="custom-control-label" for="ordersSelectThree">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6527
                      </td>
                      <td class="orders-product">
                        Custom Coffee Blend
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-21">07/21/18</time>
                      </td>
                      <td class="orders-total">
                        $11.99
                      </td>
                      <td class="orders-sratus">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div>
      
    </div> <!-- / .main-content -->

    <!-- JAVASCRIPT
    ================================================== -->
    <!-- Libs JS -->
    <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chart.js/dist/Chart.min.js')}}"></script>
    <script src="{{ asset('assets/libs/chart.js/Chart.extension.min.js')}}"></script>
    <script src="{{ asset('assets/libs/highlightjs/highlight.pack.min.js')}}"></script>
    <script src="{{ asset('assets/libs/flatpickr/dist/flatpickr.min.js')}}"></script>
    <script src="{{ asset('assets/libs/jquery-mask-plugin/dist/jquery.mask.min.js')}}"></script>
    <script src="{{ asset('assets/libs/list.js/dist/list.min.js')}}"></script>
    <script src="{{ asset('assets/libs/quill/dist/quill.min.js')}}"></script>
    <script src="{{ asset('assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>
    <script src="{{ asset('assets/libs/select2/dist/js/select2.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('assets/js/theme.min.js')}}"></script>

  </body>
</html>