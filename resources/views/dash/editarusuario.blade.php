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
                      Modificar Usuario {{ title_case($user->primer_nombre) }} {{ title_case($user->primer_apellido) }}
                    </h1>

                  </div>
                </div> <!-- / .row -->

            
              </div>
            </div>

            @include('includes.errors')

            <!-- Form -->
            <form class="mb-4" action="{{ route('admin.actualizar.usuario' , [$user->id]) }}" method="post">
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
                    <input type="text" class="form-control @error('primer_nombre') is-invalid @enderror" name="primer_nombre" value="{{ $user->primer_nombre }}" required>

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
                    <input type="text" class="form-control @error('segundo_nombre') is-invalid @enderror" name="segundo_nombre" value="{{ $user->segundo_nombre }}">

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
                    <input type="text" class="form-control @error('primer_apellido') is-invalid @enderror" name="primer_apellido" value="{{ $user->primer_apellido }}" required>

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
                    <input type="text" class="form-control @error('segundo_apellido') is-invalid @enderror" name="segundo_apellido" value="{{ $user->segundo_apellido }}">

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
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" disabled>

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
                    		<option value="1" @if($user->tipo_documento == 1) selected @endif>DNI</option>
                    		<option value="2" @if($user->tipo_documento == 2) selected @endif>Pasaporte</option>
                    	</select>
	                    </div>
	                    <div class="col">
	                    	<input type="text" class="form-control @error('numero_documento') is-invalid @enderror" name="numero_documento" placeholder="Número" value="{{ $user->numero_documento }}" required>
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
                    <input type="text" class="form-control mb-3" name="telefono_celular" value="{{ $user->telefono_celular }}">

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
                    <input type="text" class="form-control" name="fecha_nacimiento" value="{{ $user->fecha_nacimiento }}">

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
                          <input type="checkbox" class="custom-control-input" id="adminbtn">
                          <label class="custom-control-label" for="adminbtn"></label>
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
                      Nueva Contraseña
                    </label>

                    <!-- Input -->
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                  </div>
                 

                </div>

                
              </div> <!-- / .row -->
              
              <div class="detallado">
              <div class="row">
                  <div class="col-12 text-center mt-3 mb-3">
                    <h2>Datos Básicos</h2>
                  </div>
                      <div class="col-12 col-md-6">
                       
                        <div class="form-group">

                          <!-- Label -->
                          <label>
                            Género
                          </label>

                          <select name="genero" class="form-control">
                            <option value="1" @if($user->genero == 1) selected @endif>Masculino</option>
                            <option value="2" @if($user->genero == 2) selected @endif>Femenino</option>
                          </select>

                        </div>

                      </div>

                      <div class="col-12 col-md-6">
                     
                          <div class="form-group">

                            <!-- Label -->
                            <label>
                              Teléfono fijo
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" name="telefono_fijo" value="{{ $user->telefono_fijo }}">

                          </div>

                      </div>

                      <div class="col-12 col-md-6">
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                              Edad
                            </label>

                            <!-- Input -->
                            <input type="text" class="form-control mb-3" disabled>

                          </div>
                      </div>
                      <div class="col-12 col-md-6">
                        <div class="form-group">

                            <!-- Label -->
                            <label>
                              Fecha de Expedición de Documento de identidad
                            </label>

                            <!-- Input -->
                            <input type="text" data-toggle="flatpickr" class="form-control mb-3" name="expedicion" value="{{ $user->expedicion }}">

                          </div>
                      </div>
                </div>

                <div class="row">
                  <div class="col-12 text-center mb-3 mt-3">
                    <h2>Datos de Ubicación</h2>
                  </div>
                  
                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Departamento
                          </label>

                         <input type="text" name="departamento" class="form-control" value="{{ $user->departamento }}">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Ciudad
                          </label>

                         <input type="text" name="ciudad" class="form-control" value="{{ $user->ciudad }}">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Barrio
                          </label>

                         <input type="text" name="barrio" class="form-control" value="{{ $user->barrio }}">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="direccion" class="form-control" value="{{ $user->direccion }}">

                        </div>
                  </div>

                </div>

                <div class="row">
                  <div class="col-12 text-center mt-3 mb-3">
                    <h2>Datos Complementarios</h2>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Estado civil
                          </label>

                         <select name="estado_civil" class="form-control">
                           <option value="1" @if($user->estado_civil == 1) selected @endif>Soltero</option>
                           <option value="2" @if($user->estado_civil == 2) selected @endif>Casado</option>
                           <option value="3" @if($user->estado_civil == 3) selected @endif>Divorciado</option>
                           <option value="4" @if($user->estado_civil == 4) selected @endif>Viudo</option>
                         </select>

                        </div>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Personas a Cargo
                          </label>

                         <input type="number" name="personas_cargo" class="form-control" value="{{ $user->personas_cargo }}">

                        </div>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Tipo de vivienda
                          </label>

                         <select name="tipo_vivienda" class="form-control">
                           <option value="1" @if( $user->tipo_vivienda == 1 ) selected @endif>Propia</option>
                           <option value="2" @if( $user->tipo_vivienda == 2 ) selected @endif>Arrendamiento</option>
                         </select>

                        </div>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Foto
                          </label>

                         <input type="file" name="foto" class="form-control">

                        </div>
                  </div>
                </div>
                </div>
              
              <div class="row">
                <div class="col-12 text-center mt-3 mb-3">
                    <h2>Validación de Cliente</h2>
                  </div>
              </div>

              <div class="row">
                <div class="col-12 col-md-6">
                   @role('admin|agente|dev')
                   <div class="form-group">

                          <!-- Label -->
                          <label>
                            Límite de Crédito ($)
                          </label>

                          <input type="number" name="limite_credito" class="form-control" value="{{ $user->limite_credito }}">

                    </div>
                    @endrole

                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">

                          <!-- Label -->
                          @if($user->validadoPor != null)
                          <label>
                            Validado por: {{ title_case($user->validadoPor->primer_nombre) }} {{ title_case($user->validadoPor->primer_apellido) }}
                          </label>
                          @else
                          <label>
                           Usuario en Evaluación
                          </label>
                          @endif

                          <!-- <input type="number" name="limite_credito" class="form-control" value="{{ $user->limite_credito }}"> -->

                    </div>
                </div>
              </div>
              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12 col-md-6">

                  

                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary">
                    Actualizar
                  </button>
                  
                </div>
              </div> <!-- / .row -->

            </form>
@endsection