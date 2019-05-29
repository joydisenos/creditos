@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Cobros
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Por Cobrar
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    
                   
                    
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
                        <a href="#" class="text-muted sort" data-sort="orders-id">
                          Crédito
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Nombre Cliente
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
                          Fecha
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-status">
                          Saldo
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Estatus
                        </a>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                  	@foreach($cuotas as $cuota)
                    <tr>
                      
                      <td class="orders-id">
                        {{ $cuota->credito->id }}
                      </td>
                      <td class="orders-order">
                        {{ title_case($cuota->credito->user->primer_nombre) }} {{ title_case($cuota->credito->user->primer_apellido) }}
                      </td>
                      <td class="orders-product">
                        {{ $cuota->credito->user->email }}
                      </td>

                      @role('admin|agente|dev')
                      <td class="orders-product">
                        {{ ($cuota->credito->almacen)? $cuota->credito->almacen->nombre_almacen : 'No Suministrado' }}
                      </td>
                      @endrole

                      <td class="orders-date">
                        <strong>${{ $cuota->monto }}</strong>
                      </td>
                      <td class="orders-total">
                        {{ date( 'd/m' , strtotime($cuota->fecha_pago)) }}
                      </td>
                      <td class="orders-status">
                      	{{ $cuota->saldo }}
                        <!--<div class="badge badge-soft-success">
                          Shipped
                        </div>-->
                      </td>
                      <td class="orders-method">
                        {!! $cuota->estatusPago($cuota->estatus) !!}
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            @role('admin|agente|dev')
                            <a href="{{ route('admin.marcar.cobro.pago' , [$cuota->id]) }}" class="dropdown-item">
                              Marcar como Pago
                            </a>
                            
                            <a href="{{ route('admin.ver.credito' , [$cuota->credito->id]) }}" class="dropdown-item">
                              Ver Crédito
                            </a>
                            <a href="{{ route('admin.modificar.usuario' , [$cuota->credito->user->id]) }}" class="dropdown-item">
                              Ver Usuario
                            </a>
                            @endrole
                            
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