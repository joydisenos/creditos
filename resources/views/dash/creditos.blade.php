@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Créditos
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Créditos Registrados
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="{{ route('admin.crear.credito') }}" class="btn btn-primary">
                      Nuevo Crédito
                    </a>
                    
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
                  	@foreach($creditos as $credito)
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelect{{$credito->id}}">
                          <label class="custom-control-label" for="ordersSelect{{$credito->id}}">
                            &nbsp;
                          </label>
                        </div>
                      </td>
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
@endsection