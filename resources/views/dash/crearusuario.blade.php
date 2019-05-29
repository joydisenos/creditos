@extends('master.dash')

@section('header')
<style>
  .detallado{
    display: none;
  }
</style>
@endsection

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
            <form class="mb-4" action="{{ route('admin.crear.nuevo.usuario') }}" method="post" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="fecha_nacimiento">

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
                      Tipo de Perfil
                    </label>

                    <div class="row">
                      <div class="col">
                        
                        <div class="custom-control custom-radio">
                          <input type="radio" name="tipo_usuario" id="tipo1" class="tipo_usuario custom-control-input" value="0" checked>
                          <label class="custom-control-label"  for="tipo1">Cliente</label>
                        </div>
                        @role('agente|admin|dev')
                        <div class="custom-control custom-radio">
                          <input type="radio" name="tipo_usuario" id="tipo2" class="tipo_usuario custom-control-input" value="1">
                          <label class="custom-control-label"  for="tipo2">Almacén</label>
                        </div>
                        @endrole
                        @role('admin|dev')
                        <div class="custom-control custom-radio">
                          <input type="radio" name="tipo_usuario" id="tipo3" class="tipo_usuario custom-control-input" value="2">
                          <label class="custom-control-label"  for="tipo3">Agente</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input type="radio" name="tipo_usuario" id="tipo4" class="tipo_usuario custom-control-input" value="3">
                          <label class="custom-control-label"  for="tipo4">Admin</label>
                        </div>
                        @endrole

                      </div>
                      
                    </div> <!-- / .row -->
                  </div>

                   <div class="form-group perfil_detallado">

                    <!-- Label -->
                    <label class="mb-1">
                      Perfil Detallado
                    </label>

                    <!-- Form text -->
                    <small class="form-text text-muted">
                      Completar recaudos del usuario
                    </small>

                    <div class="row">
                      <div class="col-auto">
                        
                        <!-- Toggle -->
                        <div class="custom-control custom-checkbox-toggle">
                          <input type="checkbox" class="custom-control-input" id="recaudos">
                          <label class="custom-control-label" for="recaudos"></label>
                        </div>

                      </div>
                      
                    </div> <!-- / .row -->
                  </div>

                </div>
                <div class="col-12 col-md-6">

                  <div class="form-group almacen" style="display: none;">

                    <!-- Label -->
                    <label>
                      Nombre del Almacén <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" id="nombre_almacen" name="nombre_almacen" disabled>

                  </div>
                  
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
                            <option value="1">Masculino</option>
                            <option value="2">Femenino</option>
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
                            <input type="text" class="form-control mb-3" name="telefono_fijo">

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
                            <input type="text" data-toggle="flatpickr" class="form-control mb-3" name="expedicion">

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

                         <input type="text" name="departamento" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Ciudad
                          </label>

                         <input type="text" name="ciudad" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Barrio
                          </label>

                         <input type="text" name="barrio" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="direccion" class="form-control">

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
                           <option value="1">Soltero</option>
                           <option value="2">Casado</option>
                           <option value="3">Divorciado</option>
                           <option value="4">Viudo</option>
                         </select>

                        </div>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Personas a Cargo
                          </label>

                         <input type="number" name="personas_cargo" class="form-control">

                        </div>
                  </div>

                   <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Tipo de vivienda
                          </label>

                         <select name="tipo_vivienda" class="form-control">
                           <option value="1">Propia</option>
                           <option value="2">Arrendamiento</option>
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

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Cédula (anverso)
                          </label>

                         <input type="file" name="cedulaA" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Cédula (reverso)
                          </label>

                         <input type="file" name="cedulaR" class="form-control">

                        </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-12 text-center mt-3 mb-3">
                    <h2>Datos Laborales</h2>
                  </div>
                  
                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Ocupación
                          </label>

                         <select name="referencia_ocupacion" class="form-control">
                           <option value="Empleado">Empleado</option>
                           <option value="Independiente">Independiente</option>
                           <option value="Estudiante">Estudiante</option>
                           <option value="Jubilado">Jubilado</option>
                           <option value="Ama de Casa">Ama de Casa</option>
                           <option value="Otro">Otro</option>
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
                           <option value="Menos de 600">Menos de 600</option>
                           <option value="601 a 1.200">601 a 1.200</option>
                           <option value="1.201 a 2.000">1.201 a 2.000</option>
                           <option value="2.001 a 3.000">2.001 a 3.000</option>
                           <option value="mas de 3.000">mas de 3.000</option>
                         </select>

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Nombre de Empresa
                          </label>

                         <input type="text" name="referencia_nombre_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de la oficina
                          </label>

                         <input type="text" name="referencia_telefono_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Extensión Telefónica
                          </label>

                         <input type="text" name="referencia_extension_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_direccion_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Sucursal
                          </label>

                         <input type="text" name="referencia_sucursal_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de Sucursal
                          </label>

                         <input type="text" name="referencia_telefono_sucursal_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Cargo desempeñado
                          </label>

                         <input type="text" name="referencia_cargo_empresa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Tiempo de Servicio
                          </label>

                         <input type="text" name="referencia_tiempo_empresa" class="form-control">

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

                         <input type="text" name="referencia_personal1_primer_nombre" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Nombre
                          </label>

                         <input type="text" name="referencia_personal1_segundo_nombre" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Apellido
                          </label>

                         <input type="text" name="referencia_personal1_primer_apellido" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Apellido
                          </label>

                         <input type="text" name="referencia_personal1_segundo_apellido" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_personal1_direccion" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de casa
                          </label>

                         <input type="text" name="referencia_personal1_telefono_casa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono celular
                          </label>

                         <input type="text" name="referencia_personal1_telefono_celular" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono oficina
                          </label>

                         <input type="text" name="referencia_personal1_telefono_laboral" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Parentesco
                          </label>

                         <input type="text" name="referencia_personal1_parentesco" class="form-control">

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

                         <input type="text" name="referencia_personal2_primer_nombre" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Nombre
                          </label>

                         <input type="text" name="referencia_personal2_segundo_nombre" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Primer Apellido
                          </label>

                         <input type="text" name="referencia_personal2_primer_apellido" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Segundo Apellido
                          </label>

                         <input type="text" name="referencia_personal2_segundo_apellido" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Dirección
                          </label>

                         <input type="text" name="referencia_personal2_direccion" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono de casa
                          </label>

                         <input type="text" name="referencia_personal2_telefono_casa" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono celular
                          </label>

                         <input type="text" name="referencia_personal2_telefono_celular" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Teléfono oficina
                          </label>

                         <input type="text" name="referencia_personal2_telefono_laboral" class="form-control">

                        </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group">

                          <!-- Label -->
                          <label>
                            Parentesco
                          </label>

                         <input type="text" name="referencia_personal2_parentesco" class="form-control">

                        </div>
                  </div>



                </div>
                </div>

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

@section('scripts')
<script>
  $(document).ready(function(){

    $('#recaudos').change(function(){
        if($(this).prop('checked'))
        {
          $('.detallado').show();
        }else{
          $('.detallado').hide();
        }

    });

    $('.tipo_usuario').change(function(){
      if($(this).val() == 1)
      {
        $('.almacen').show();
        $('#nombre_almacen').prop('disabled' , false);
        $('#nombre_almacen').prop('required' , true);
      }else{
        $('.almacen').hide();
        $('#nombre_almacen').prop('disabled' , true);
        $('#nombre_almacen').prop('required' , false);
      }

      if($(this).val() == 0)
      {
        $('.perfil_detallado').show();
      }else{
        $('.perfil_detallado').hide();
        $('.detallado').hide();
      }
    });
  });
</script>
@endsection