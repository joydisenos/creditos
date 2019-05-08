@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Nuevo
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Crear Usuario
                    </h1>

                  </div>
                </div> <!-- / .row -->

                <!-- Nav -->

                <!--
                <div class="row align-items-center">
                  <div class="col">
                    
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" class="nav-link active">
                          General
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Profile
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Billing
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Notifications
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
            -->
              </div>
            </div>

            @include('includes.errors')

            <!-- Form -->
            <form class="mb-4" action="{{ route('admin.crear.nuevo.usuario') }}" method="post">
            	@csrf

              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Primer Nombre <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control @error('primer_nombre') is-invalid @enderror" name="primer_nombre" required>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Segundo Nombre
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control @error('segundo_nombre') is-invalid @enderror" name="segundo_nombre">

                  </div>

                </div>

                 <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Primer Apellido <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control @error('primer_apellido') is-invalid @enderror" name="primer_apellido" required>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Segundo Apellido
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido">

                  </div>

                </div>

                <div class="col-12 col-md-6">
                  
                  <!-- Email address -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Email <span class="text-danger">*</span>
                    </label>


                    <!-- Input -->
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                  </div>

                </div>

                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Documento de identidad <span class="text-danger">*</span>
                    </label>

                    <div class="row">
                    	<div class="col-4">
                    	<select name="tipo_documento" class="form-control @error('tipo_documento') is-invalid @enderror" required>
                    		<option value="">Seleccione</option>
                    		<option value="1">DNI</option>
                    		<option value="2">Pasaporte</option>
                    	</select>
	                    </div>
	                    <div class="col">
	                    	<input type="text" class="form-control @error('numero_documento') is-invalid @enderror" name="numero_documento" placeholder="Número" required>
	                    </div>
                    </div>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Phone -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Teléfono Celular
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control mb-3" name="telefono_celular">

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Birthday -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Fecha de Nacimiento
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" data-toggle="flatpickr" name="fecha_nacimiento">

                  </div>

                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- Public profile -->
                  <div class="form-group">

                    <!-- Label -->
                    <label class="mb-1">
                      Perfil de Administrador
                    </label>

                    <!-- Form text -->
                    <small class="form-text text-muted">
                      Este usuario tendrá acceso al panel de control administrativo de la web
                    </small>

                    <div class="row">
                      <div class="col-auto">
                        
                        <!-- Toggle -->
                        <div class="custom-control custom-checkbox-toggle">
                          <input type="checkbox" class="custom-control-input" id="toggleOne">
                          <label class="custom-control-label" for="toggleOne"></label>
                        </div>

                      </div>
                      
                    </div> <!-- / .row -->
                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Password -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Contraseña <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                  </div>

                  <!-- New password -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Confirme su contraseña <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>

                  </div>

                 

                </div>
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12 col-md-6">

                  

                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary">
                    Crear
                  </button>
                  
                </div>
              </div> <!-- / .row -->

            </form>
@endsection