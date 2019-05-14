@extends('master.dash')

@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Crédito
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Crédito # {{ $credito->id }}
                    </h1>

                  </div>
                </div> <!-- / .row -->

               
              </div>
            </div>
    
              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <h2>Usuario: {{ title_case($credito->user->primer_nombre) }} {{ title_case($credito->user->primer_apellido) }}</h2>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <p>Interés {{ $credito->interes }}%</p>
                  </div>

                </div>

                 <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                   <p>Nº Cuotas {{ $credito->cuotas }}</p>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    {{ $credito->monto }}

                  </div>

                </div>

                
                
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12">

                  <div class="text-center">
                    <h3>Cuotas</h3>
                  </div>
                    
                    
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <th>
                            Cuota
                          </th>
                          <th>
                            Interés
                          </th>
                          <th>
                            Abono al capital
                          </th>
                          <th>
                            Valor de Cuota
                          </th>
                          <th>
                            Saldo al Capital
                          </th>
                        </thead>

                        <tbody class="table-body">
                        @foreach($credito->cuotasDetalladas as $key => $cuota)
                        <tr>
                        	<td> {{ $key + 1 }} </td>
                        	<td>
                        		{{ $cuota->interes }}
                        	</td>
                        	<td>
                        		{{ $cuota->abono }}
                        	</td>
                        	<td>
                        		{{ $cuota->monto }}
                        	</td>
                        	<td>
                        		{{ $cuota->saldo }}
                        	</td>
                        </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>

                </div>
                
                
              </div> <!-- / .row -->
              
            

@endsection
