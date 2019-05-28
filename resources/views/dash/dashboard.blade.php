@extends('master.dash')
@section('content')
<!-- HEADER -->
      <div class="header bg-dark pb-5">
        <div class="container-fluid">

          <!-- Body -->
          <div class="header-body">
            <div class="row align-items-end">
              <div class="col">
                
                <!-- Pretitle -->
                <h6 class="header-pretitle text-secondary">
                  Dashboard
                </h6>

                <!-- Title -->
                <h1 class="header-title text-white">
                  Créditos
                </h1>

              </div>
              <div class="col-auto">
                
                <!-- Nav -->
                <ul class="nav nav-tabs header-tabs">
                  <li class="nav-item" id="credito-data" data-origen="[{{ implode( ',' ,$creditosPorMes) }}]" data-toggle="chart" data-target="#headerChart" data-update='{"data":
                  {"datasets":[{"data":[ {{ implode( "," ,$creditosPorMes) }} ] }]}}' data-prefix="" data-suffix="">
                    <a href="#" class="nav-link text-center active" data-toggle="tab">
                      <h6 class="header-pretitle text-secondary">
                        Créditos
                      </h6>
                      <h3 class="text-white mb-0">
                        {{ $creditosMes }}
                      </h3>
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[ {{ implode( "," ,$ingresosPorMes) }} ] }]}}' data-prefix="$" data-suffix="">
                    <a href="#" class="nav-link text-center" data-toggle="tab">
                      <h6 class="header-pretitle text-secondary">
                        Ingresos
                      </h6>
                      <h3 class="text-white mb-0">
                        $ {{ $ingresosMes }}
                      </h3>
                    </a>
                  </li>
                  <li class="nav-item" data-toggle="chart" data-target="#headerChart" data-update='{"data":{"datasets":[{"data":[ {{ implode( "," ,$pagosPorMes) }} ] }]}}' data-prefix="$" data-suffix="">
                    <a href="#" class="nav-link text-center" data-toggle="tab">
                      <h6 class="header-pretitle text-secondary">
                        Pagos
                      </h6>
                      <h3 class="text-white mb-0">
                        $ {{ $pagosMes }}
                      </h3>
                    </a>
                  </li>
                </ul>

              </div>
            </div> <!-- / .row -->
          </div> <!-- / .header-body -->

          <!-- Footer -->
          <div class="header-footer">

            <!-- Chart -->
            <div class="chart">
              <canvas id="headerChart" class="chart-canvas"></canvas>
            </div>

          </div>

        </div>
      </div> <!-- / .header -->
      
      <!-- CARDS -->
      <div class="container-fluid mt--6">
        <div class="row">
          <div class="col-12 col-xl-8">
            
            <!-- Orders -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Cobros Pendientes
                    </h4>

                  </div>
                  <div class="col-auto mr--3">
                    
                    <!-- Caption -->
                    <span class="text-muted">
                      Mostrar Pagos:
                    </span>

                  </div>
                  <div class="col-auto">

                    <!-- Toggle -->
                    <div class="custom-control custom-checkbox-toggle">
                      <input type="checkbox"
                       class="custom-control-input" 
                       id="cardToggle" 
                       data-inicial="[ {{ implode( ',' ,$estadisticaPagosPendientes) }} ]"
                       data-toggle="chart" 
                       data-target="#ordersChart" 
                       data-add='{"data":{"datasets":[{"data": [ {{ implode( "," ,$estadisticaPagos) }} ] ,"backgroundColor":"#d2ddec","label":"Pagos"}]}}'>
                      <label class="custom-control-label" for="cardToggle"></label>
                    </div>

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="card-body">
                
                <!-- Chart -->
                <div class="chart">
                  <canvas id="ordersChart" class="chart-canvas"></canvas>
                </div>

              </div>
            </div>

          </div>
          <div class="col-12 col-xl-4">

            <!-- Devices -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Estatus de Créditos
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Tabs -->
                    <ul class="nav nav-tabs nav-tabs-sm card-header-tabs">
                      <li class="nav-item"
                      id="datos-credito" 
                      data-toggle="chart" 
                      data-target="#devicesChart" 
                      data-inicial="[ {{ implode( ',' ,$totalEstatusCreditos) }} ]" 
                      data-update='{"data":{"datasets":[{"data": [ {{ implode( "," ,$totalEstatusCreditos) }} ] }]}}'>
                        <a href="#" class="nav-link active" data-toggle="tab">
                          Este Mes
                        </a>
                      </li>
                    </ul>

                  </div>
                </div> <!-- / .row -->

              </div>
              <div class="card-body">
                
                <!-- Chart -->
                <div class="chart chart-appended">
                  <canvas id="devicesChart" class="chart-canvas" data-target="#devicesChartLegend"></canvas>
                </div>

                <!-- Legend -->
                <div id="devicesChartLegend" class="chart-legend"></div>

              </div>
            </div>
            
          </div>
        </div> <!-- / .row -->
        
        <div class="row">
          <div class="col-12 col-xl-4">

            <!-- Projects -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Title -->
                    <h4 class="card-header-title">
                      Pagos Pendientes
                    </h4>

                  </div>
                  <div class="col-auto">

                    <!-- Link -->
                    <a href="#!" class="small">Pagos</a>
                    
                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="card-body">

                @foreach($pagos as $key => $pago)
                <div class="row align-items-center">

                  <div class="col ml--2">

                    <!-- Title -->
                    <h4 class="card-title mb-1">
                      {{ title_case($pago->user->primer_nombre) }} {{ title_case($pago->user->primer_apellido) }}
                    </h4>

                    <!-- Time -->
                    <p class="card-text small text-muted">
                      ${{ round($pago->por_pagar) }}
                    </p>
                    
                  </div>
                  
                </div> <!-- / .row -->

                <!-- Divider -->
                <hr>
                @break($key == 3)
                @endforeach


              </div> <!-- / .card-body -->
            </div> <!-- / .card -->            

          </div>
          <div class="col-12 col-xl-8">
            
            <!-- Goals -->
            <div class="card">
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Title -->
                    <h4 class="card-header-title">
                      Créditos
                    </h4>

                  </div>
                  
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive mb-0" data-toggle="lists" data-lists-values='["goal-project", "goal-status", "goal-progress", "goal-date"]'>
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="goal-project">
                          Usuario
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="goal-status">
                          Email
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="goal-progress">
                          Monto
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="goal-date">
                          Estatus
                        </a>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    @foreach($creditosAll as $key => $credito)
                    <tr>
                      <td class="goal-project">
                        {{ title_case($credito->user->primer_nombre) }} {{ title_case($credito->user->primer_apellido) }}
                      </td>
                      <td class="goal-status">
                        {{ $credito->user->email }}
                      </td>
                      <td class="goal-progress">
                        ${{ round($credito->monto) }}
                      </td>
                      <td class="goal-date">
                        {!! $credito->estatusCredito($credito->estatus) !!}
                      </td>
                      
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.aprobar.credito' , [$credito->id]) }}" class="dropdown-item">
                              Aprobar
                            </a>
                            <a href="{{ route('admin.negar.credito' , [$credito->id]) }}" class="dropdown-item">
                              Negar
                            </a>
                            <a href="{{ route('admin.ver.credito' , [$credito->id]) }}" class="dropdown-item">
                              Más Detalles
                            </a>
                            
                          </div>
                        </div>
                      </td>
                    </tr>
                    @break($key == 4)
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div>
@endsection
