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

                 <!-- Nav -->

                
                <div class="row align-items-center">
                  <div class="col">
                    
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" data-target=".datos-basicos" class="tab-usuario nav-link active">
                          Datos Básicos
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" data-target=".datos-laborales" class="tab-usuario nav-link">
                          Datos Laborales
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" data-target=".documentos" class="tab-usuario nav-link">
                          Documentos
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" data-target=".creditos" class="tab-usuario nav-link">
                          Créditos
                        </a>
                      </li>
                      
                    </ul>

                  </div>
                </div>
            

            
              </div>
            </div>

            @include('includes.errors')

            <!-- Form -->

            
            <div class="datos-basicos ocultar">
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
             
            </div>

            <div class="datos-laborales ocultar" style="display:none">
              
               <div class="row">
                  
                  
                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Ocupación
                          </label>

                         <select name="referencia_ocupacion" class="form-control">
                           <option {{ $user->referencia_ocupacion == 'Empleado'? 'selected' : '' }} value="Empleado">Empleado</option>
                           <option {{ $user->referencia_ocupacion == 'Independiente'? 'selected' : '' }} value="Independiente">Independiente</option>
                           <option {{ $user->referencia_ocupacion == 'Estudiante'? 'selected' : '' }} value="Estudiante">Estudiante</option>
                           <option {{ $user->referencia_ocupacion == 'Jubilado'? 'selected' : '' }} value="Jubilado">Jubilado</option>
                           <option {{ $user->referencia_ocupacion == 'Ama de Casa'? 'selected' : '' }} value="Ama de Casa">Ama de Casa</option>
                           <option {{ $user->referencia_ocupacion == 'Otro'? 'selected' : '' }} value="Otro">Otro</option>
                         </select>

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Ingresos Mensuales
                          </label>

                         <select name="referencia_ingresos" class="form-control">
                           <option {{$user->referencia_ingresos == 'Menos de 600' ? 'selected' : ''}} value="Menos de 600">Menos de 600</option>
                           <option {{$user->referencia_ingresos == '601 a 1.200' ? 'selected' : ''}} value="601 a 1.200">601 a 1.200</option>
                           <option {{$user->referencia_ingresos == '1.201 a 2.000' ? 'selected' : ''}} value="1.201 a 2.000">1.201 a 2.000</option>
                           <option {{$user->referencia_ingresos == '2.001 a 3.000' ? 'selected' : ''}} value="2.001 a 3.000">2.001 a 3.000</option>
                           <option {{$user->referencia_ingresos == 'mas de 3.000' ? 'selected' : ''}} value="mas de 3.000">mas de 3.000</option>
                         </select>

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Nombre de Empresa
                          </label>

                         <input type="text" name="referencia_nombre_empresa" value="{{$user->referencia_nombre_empresa}}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de la oficina
                          </label>

                         <input type="text" name="referencia_telefono_empresa" value="{{ $user->referencia_telefono_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Extensión Telefónica
                          </label>

                         <input type="text" name="referencia_extension_empresa" value="{{ $user->referencia_extension_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_direccion_empresa" value="{{ $user->referencia_direccion_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Sucursal
                          </label>

                         <input type="text" name="referencia_sucursal_empresa" value="{{ $user->referencia_sucursal_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de Sucursal
                          </label>

                         <input type="text" name="referencia_telefono_sucursal_empresa" value="{{ $user->referencia_telefono_sucursal_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Cargo desempeñado
                          </label>

                         <input type="text" name="referencia_cargo_empresa" value="{{ $user->referencia_cargo_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Tiempo de Servicio
                          </label>

                         <input type="text" name="referencia_tiempo_empresa" value="{{ $user->referencia_tiempo_empresa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 text-center mt-3 mb-3">
                    <h2>Referencias Personales</h2>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Nombre
                          </label>

                         <input type="text" name="referencia_personal1_primer_nombre" value="{{ $user->referencia_personal1_primer_nombre }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Nombre
                          </label>

                         <input type="text" name="referencia_personal1_segundo_nombre" value="{{ $user->referencia_personal1_segundo_nombre }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Apellido
                          </label>

                         <input type="text" name="referencia_personal1_primer_apellido" value="{{ $user->referencia_personal1_primer_apellido }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Apellido
                          </label>

                         <input type="text" name="referencia_personal1_segundo_apellido" value="{{ $user->referencia_personal1_segundo_apellido }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_personal1_direccion" value="{{ $user->referencia_personal1_direccion }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de casa
                          </label>

                         <input type="text" name="referencia_personal1_telefono_casa" value="{{ $user->referencia_personal1_telefono_casa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono celular
                          </label>

                         <input type="text" name="referencia_personal1_telefono_celular" value="{{ $user->referencia_personal1_telefono_celular }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono oficina
                          </label>

                         <input type="text" name="referencia_personal1_telefono_laboral" value="{{ $user->referencia_personal1_telefono_laboral }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Parentesco
                          </label>

                         <input type="text" name="referencia_personal1_parentesco" value="{{ $user->referencia_personal1_parentesco }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 text-center mt-3 mb-3">
                    <h2>Segunda Referencia Personal</h2>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Nombre
                          </label>

                         <input type="text" name="referencia_personal2_primer_nombre" value="{{ $user->referencia_personal2_primer_nombre }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Nombre
                          </label>

                         <input type="text" name="referencia_personal2_segundo_nombre" value="{{ $user->referencia_personal2_segundo_nombre }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Apellido
                          </label>

                         <input type="text" name="referencia_personal2_primer_apellido" value="{{ $user->referencia_personal2_primer_apellido }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Apellido
                          </label>

                         <input type="text" name="referencia_personal2_segundo_apellido" value="{{ $user->referencia_personal2_segundo_apellido }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_personal2_direccion" value="{{ $user->referencia_personal2_direccion }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de casa
                          </label>

                         <input type="text" name="referencia_personal2_telefono_casa" value="{{ $user->referencia_personal2_telefono_casa }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono celular
                          </label>

                         <input type="text" name="referencia_personal2_telefono_celular" value="{{ $user->referencia_personal2_telefono_celular }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono oficina
                          </label>

                         <input type="text" name="referencia_personal2_telefono_laboral" value="{{ $user->referencia_personal2_telefono_laboral }}" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Parentesco
                          </label>

                         <input type="text" name="referencia_personal2_parentesco" value="{{ $user->referencia_personal2_parentesco }}" class="form-control">

                        </div>
                  </div>



                </div>

            </div>



            

            <div class="documentos ocultar">
              
              
              <div class="row justify-content-center">
                @if($user->foto != null)
                <div class="col-12 col-md-4 text-center">
                  <h3>Foto Cliente</h3>
                  <img src="{{ asset('storage/archivos/' . $user->id . '/' . $user->foto) }}" class="img-fluid" alt="Foto">
                </div>
                 @endif

                 @foreach($user->documentos as $documento)
                 <div class="col-12 col-md-4 text-center">
                  <h3>{{ $documento->nombre }}</h3>
                  <img src="{{ asset('storage/archivos/' . $user->id . '/' . $documento->ruta) }}" class="img-fluid" alt="Foto">
                </div>
                 @endforeach
              </div>
             

            </div>
            <div class="creditos ocultar" style="display:none">





              <!-- Card -->
            <div class="card" data-toggle="lists" data-lists-values='["orders-id","orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Search -->
                    <form class="row align-items-center">
                      <div class="col-auto pr-0">
                        <span class="fe fe-search text-muted"></span>
                      </div>
                      <div class="col">
                          <input type="search" class="form-control form-control-flush search" placeholder="Buscar">
                      </div>
                    </form>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Button 

                    <div class="dropdown">
                      <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown">
                        <a class="dropdown-item" href="#!">Acción</a>
                        <a class="dropdown-item" href="#!">Acción</a>
                        <a class="dropdown-item" href="#!">Acción</a>
                      </div>
                    </div>-->

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <!--<th>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectAll">
                          <label class="custom-control-label" for="ordersSelectAll">
                            &nbsp;
                          </label>
                        </div>
                      </th>-->
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-id">
                          Número
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Nombre
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Email
                        </a>
                      </th>
                      @role('admin|agente|dev')
                      <th>
                        <a href="#" class="text-muted sort" data-sort="almacen">
                          Almacén
                        </a>
                      </th>
                      @endrole
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Monto
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-total">
                          Cuotas
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-status">
                          Tasa
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Estatus
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    @foreach($user->creditos as $credito)
                    <tr>
                      <!--<td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelect{{$credito->id}}">
                          <label class="custom-control-label" for="ordersSelect{{$credito->id}}">
                            &nbsp;
                          </label>
                        </div>
                      </td>-->
                      <td class="orders-id">
                        {{ $credito->id }}
                      </td>
                      <td class="orders-order">
                        {{ title_case($credito->user->primer_nombre) }} {{ title_case($credito->user->primer_apellido) }}
                      </td>
                      <td class="orders-product">
                        {{ $credito->user->email }}
                      </td>

                      @role('admin|agente|dev')
                      <td class="orders-product">
                        {{ ($credito->almacen)? $credito->almacen->nombre_almacen : 'No Suministrado' }}
                      </td>
                      @endrole

                      <td class="orders-date">
                        ${{ $credito->monto }}
                      </td>
                      <td class="orders-total">
                        {{ $credito->cuotas }}
                      </td>
                      <td class="orders-status">
                        {{ $credito->interes }}
                        <!--<div class="badge badge-soft-success">
                          Shipped
                        </div>-->
                      </td>
                      <td class="orders-method">
                        {!! $credito->estatusCredito($credito->estatus) !!}
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            @role('admin|agente|dev')
                            <a href="{{ route('admin.aprobar.credito' , [$credito->id]) }}" class="dropdown-item">
                              Aprobar
                            </a>
                            <a href="{{ route('admin.negar.credito' , [$credito->id]) }}" class="dropdown-item">
                              Negar
                            </a>
                            @endrole
                            <a href="{{ route('admin.ver.credito' , [$credito->id]) }}" class="dropdown-item">
                              Más Detalles
                            </a>
                            
                          </div>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            </div>
@endsection
@section('scripts')
<script>
  $(document).ready(function(){
    $('.tab-usuario').click(function(e){
      e.preventDefault();
      $('.tab-usuario').removeClass('active');
      $(this).addClass('active');
      target = $(this).data('target');
      $('.ocultar').hide();
      $(target).show();
    });
  });
</script>
@endsection