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
            <form class="mb-4" action="{{ route('admin.crear.nuevo.credito') }}" method="post">
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
                      Interés (%)
                    </label>

                    <!-- Input -->
                    <input type="number" class="form-control calculo" value="12" id="interes" name="interes" required>

                  </div>

                </div>

                 <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Cuotas (meses) <span class="text-danger">*</span>
                    </label>

                    <!-- Input -->
                    <input type="number" class="form-control calculo" id="cuotas" value="6" name="cuotas" required>

                  </div>

                </div>
                <div class="col-12 col-md-6">
                  
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Monto
                    </label>

                    <!-- Input -->
                    <input type="number" step="0.01" class="form-control calculo" id="monto" value="1" name="monto">

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
                        
                        </tbody>
                      </table>
                    </div>

                </div>
                
                
              </div> <!-- / .row -->
              
              

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

    $('.calculo').keyup(function(){

      $('.table-body').empty();

      monto = parseFloat($('#monto').val());
      interesPorcentaje = parseFloat($('#interes').val());
      tasa = parseFloat(interesPorcentaje) / 100;
      cuotas = parseFloat($('#cuotas').val());

      // $('#total').html(total);

      // Cuota Fija
      valor = monto *( (tasa * Math.pow(1 + tasa, cuotas)) / (Math.pow(1 + tasa, cuotas) - 1) );
      valor = valor.toFixed(2);

      //Amortización
      valor_de_cuota = valor;
      saldo_al_capital = monto;
      items = new Array();

      for (i=0; i < cuotas; i++) {
          interes = saldo_al_capital * tasa ;
          abono_al_capital = valor_de_cuota - interes;
          saldo_al_capital -= abono_al_capital;
          numero = i + 1;
          
          interes = interes.toFixed(2);
          abono_al_capital = abono_al_capital.toFixed(2);
          saldo_al_capital = saldo_al_capital.toFixed(2);

          item = [numero, interes, abono_al_capital, valor_de_cuota, saldo_al_capital];
          items.push(item);
      }

     for (i = 0; i < items.length; i++) {
              item = items[i];
              if(item[4] < 1)
              {
                item[4] = 0;
              }
              $('.table-body').append('<tr><td>'+ item[0] +'</td><td>' + item[1] + '</td><td>' + item[2] + '</td><td>' + item[3] + '</td><td>' + item[4] + '</td></tr>');
          }

          $('#array').val(JSON.stringify(items));
          console.log(JSON.stringify(items));

    });
   
  });
</script>



@endsection