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
                      Buzón de Mensajes
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    
                    
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
                        <a class="dropdown-item" href="#!">Marcar como leído</a>
                        <a class="dropdown-item" href="#!">Marcar como no leído</a>
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
                          Asunto
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Mensaje
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Fecha
                        </a>
                      </th>
                    
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Leído
                        </a>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody class="list">
                  	@foreach($mensajes as $mensaje)
                    <tr class="{{ ($mensaje->leido == 1)? '' : 'font-weight-bold' }}">
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelect{{$mensaje->id}}">
                          <label class="custom-control-label" for="ordersSelect{{$mensaje->id}}">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        {{ $mensaje->asunto }}
                      </td>
                      <td class="orders-product">
                        {{ str_limit($mensaje->mensaje , 50) }}
                      </td>
                      <td class="orders-date">
                        {{ $mensaje->created_at->format('d/m') }}
                      </td>
                      <td class="orders-total">
                        <span class="{{ ($mensaje->leido == 1)? 'fe fe-check-circle text-success' : 'fe fe-book text-danger' }}"></span>
                      </td>
                      
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('usuario.ver.mensaje' , $mensaje->id) }}" class="dropdown-item">
                              Ver mensaje
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