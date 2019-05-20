@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Mensajes
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      {{ $mensaje->asunto }}
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    
                    
                  </div>
                </div> <!-- / .row -->
                
              </div>
            </div>

            <!-- Card -->
            <div class="card">
              
              <div class="card-body">
              	<p>{{ $mensaje->mensaje }}</p>
              </div>
              
            </div>
@endsection