@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Pagos
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Registro de Pagos
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button 
                    <a href="#" class="btn btn-primary">
                      Nuevo Crédito
                    </a>
                    -->

                  </div>
                </div> <!-- / .row -->
                
              </div>
            </div>

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
                    
                    <!-- Button -->

                    <div class="dropdown">
                      <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Acción
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown">
                        <a class="dropdown-item" href="#!">Acción</a>
                        <a class="dropdown-item" href="#!">Acción</a>
                        <a class="dropdown-item" href="#!">Acción</a>
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
                        <a href="#" class="text-muted sort" data-sort="orders-id">
                          Número
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Almacén
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Email
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Monto
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-total">
                          Fecha
                        </a>
                      </th>

                      <th></th>
                      
                    </tr>
                  </thead>
                  <tbody class="list">
                  	@foreach($pagos as $pago)
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelect{{$pago->id}}">
                          <label class="custom-control-label" for="ordersSelect{{$pago->id}}">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-id">
                        {{ $pago->id }}
                      </td>
                      <td class="orders-order">
                        {{ title_case($pago->user->primer_nombre) }} {{ title_case($pago->user->primer_apellido) }}
                      </td>
                      <td class="orders-product">
                        {{ $pago->user->email }}
                      </td>
                      <td class="orders-date">
                        ${{ round($pago->por_pagar) }}
                      </td>
                      <td class="orders-total">
                        {{ $pago->created_at->format('d/y') }}
                      </td>
                      
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.marcar.pago' , [$pago->id]) }}" class="dropdown-item">
                              Marcar como pago
                            </a>
                            <a href="{{ route('admin.ver.credito' , [$pago->id]) }}" class="dropdown-item">
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
@endsection