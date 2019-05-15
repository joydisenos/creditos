<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light" id="sidebar">
        <div class="container-fluid">

          <!-- Toggler -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Brand -->
          <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/isotipo-negro.png')}}" class="navbar-brand-img 
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
                <a href="#" class="dropdown-item">Configuración</a>
                <hr class="dropdown-divider">
                <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >Salir</a>
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

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Panel Administrativo
            </h6>

      
            <!-- Navigation -->
            <ul class="navbar-nav">
              <!--<li class="nav-item">
                <a class="nav-link" href="#sidebarDashboards" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                  <i class="fe fe-home"></i> Dashboard
                </a>
                <div class="collapse " id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a href="index.html" class="nav-link ">
                        General
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="dashboard-alt.html" class="nav-link ">
                        Alternative <span class="badge badge-soft-success ml-auto">New</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>-->


              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}" role="button">
                  <i class="fe fe-activity"></i> Dashboard
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.usuarios') }}" role="button">
                  <i class="fe fe-users"></i> Usuarios
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.creditos') }}" role="button">
                  <i class="fe fe-book-open"></i> Créditos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.enviar.mensaje') }}" role="button">
                  <i class="fe fe-mail"></i> Mensajes
                </a>
              </li>

            </ul>

            <!-- Divider -->
            <hr class="navbar-divider my-3">

            <!-- Heading -->
            <h6 class="navbar-heading">
              Panel de Usuario
            </h6>


            <ul class="navbar-nav">

              <!--<li class="nav-item">
                <a class="nav-link" href="{{ route('usuario.index') }}" role="button">
                  <i class="fe fe-activity"></i> Inicio
                </a>
              </li>-->

              <li class="nav-item">
                <a class="nav-link" href="{{ route('usuario.creditos') }}" role="button">
                  <i class="fe fe-activity"></i> Créditos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="{{ route('usuario.mensajes') }}" role="button">
                  <i class="fe fe-activity"></i> Mensajes
                </a>
              </li>

              <li class="nav-item d-md-none">
                <a class="nav-link" href="#sidebarModalActivity" data-toggle="modal">
                 <span class="fe fe-bell"></span> Notificaciones
                </a>
              </li>


            </ul>

        
          
      
            <!-- Push content down -->
            <div class="mt-auto"></div>
      
            
      
            
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
                  <a href="#" class="dropdown-item">Configuración</a>
                  <hr class="dropdown-divider">
                  <a href="{{ route('logout') }}" class="dropdown-item"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    >Salir</a>
                    
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

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
    </form>