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
                      Nuevo Crédito
                    </h1>

                  </div>
                </div> <!-- / .row -->

              </div>
            </div>

            @include('includes.errors')

            <!-- Form -->
            <form class="mb-4" action="#" method="post">
            	@csrf
              
              <input type="hidden" name="cuotas_array" id="array">
              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Seleccionar Usuario <span class="text-danger">*</span>
                    </label>

                    <select name="user_id" class="form-control" data-toggle="select" required>
                    		<option value="">Seleccione un Usuario</option>
                    		@foreach($users as $user)
                          <option value="{{ $user->id }}">{{ title_case($user->primer_nombre) }} {{ title_case($user->primer_apellido) }}</option>
                        @endforeach
                    	</select>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Asunto
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control" id="interes" name="asunto" required>

                  </div>

                </div>

               
                <div class="col-12">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Mensaje
                    </label>

                    <textarea name="mensaje" id="" class="form-control" cols="30" rows="10" required></textarea>

                  </div>

                </div>

                
                
              </div> <!-- / .row -->

              
              
              

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12 col-md-6">

                  

                  <!-- Submit -->
                  <button type="submit" class="btn btn-primary">
                    Enviar
                  </button>
                  
                </div>
              </div> <!-- / .row -->

            </form>
@endsection