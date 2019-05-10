@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Usuarios
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Usuarios Registrados
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="{{ route('admin.crear.usuario') }}" class="btn btn-primary">
                      Nuevo Usuario
                    </a>
                    
                  </div>
                </div> <!-- / .row -->
                
              </div>
            </div>

            <!-- Card -->
            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]'>
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
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Nombre
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Email
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Fijo
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-total">
                          Celular
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-status">
                          Dirección
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Créditos Activos
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                  	@foreach($users as $user)
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelect{{$user->id}}">
                          <label class="custom-control-label" for="ordersSelect{{$user->id}}">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        {{ title_case($user->primer_nombre) }} {{ title_case($user->primer_apellido) }}
                      </td>
                      <td class="orders-product">
                        {{ $user->email }}
                      </td>
                      <td class="orders-date">
                        {{ $user->telefono_fijo }}
                      </td>
                      <td class="orders-total">
                        {{ $user->telefono_celular }}
                      </td>
                      <td class="orders-status">
                      	{{ $user->direccion }}, {{ $user->ciudad }}
                        <!--<div class="badge badge-soft-success">
                          Shipped
                        </div>-->
                      </td>
                      <td class="orders-method">
                        8
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('admin.modificar.usuario' , [$user->id]) }}" class="dropdown-item">
                              Modificar
                            </a>
                            <a href="#!" class="dropdown-item">
                              Crear Crédito
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