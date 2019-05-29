@extends('master.dash')

@section('header')
<style>
  .detallado{
    display: none;
  }
  .btn-agregar-producto{
    padding: 30px;
    border: dashed medium #ececec;
    width: 100%;
    text-align: center;
    color: #cccccc;
    cursor: pointer;
    margin-bottom: 30px;
  }
  .loop-productos{
    width: 100%;
  }
  .eliminar{
    padding: 15px;
    color: #ffffff;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
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
            <form class="mb-4" action="{{ route('admin.crear.nuevo.credito') }}" method="post">
            	@csrf
              
              <input type="hidden" name="cuotas_array" id="array">
              <input type="hidden" name="productos" id="productos-array">
              <input type="hidden" name="por_pagar" id="por_pagar">

              <div class="row">
                <div class="col-12 col-md-6">
                  
                  <!-- First name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Seleccionar Usuario <span class="text-danger">*</span>
                    </label>

                    <select name="user_id" class="form-control" data-toggle="select" id="usuario_seleccionado" required>
                    		<option value="">Seleccione un Usuario</option>
                    		@foreach($users as $user)
                          <option value="{{ $user->id }}"
                            data-limite="{{ $user->limite_credito }}">{{ title_case($user->primer_nombre) }} {{ title_case($user->primer_apellido) }}</option>
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
                    <input type="number" class="form-control calculo" value="3" id="interes" name="interes" required>

                  </div>

                </div>
              </div>

                <div class="producto-item row">
                <div class="col-12 col-md-6">
                  <!-- Last name -->
                  <div class="form-group">

                    <!-- Label -->
                    <label>
                      Nombre de Producto
                    </label>

                    <!-- Input -->
                    <input type="text" class="form-control producto-nombre" name="producto[]" required>

                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group producto-item">

                    <!-- Label -->
                    <label>
                      Precio de Producto ($) <span class="precio_con_comision"></span> 
                    </label>

                    <!-- Input -->
                    <input type="number" class="form-control producto-precio" value="0" name="precio[]" required>

                  </div>
                </div>
                
                <!-- Loop productos -->

                
                
                </div>

                <div class="loop-productos"></div>

                <div class="btn-agregar-producto">
                  <h2>+ Agregar Producto</h2>
                </div>

                <div class="row">
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
                      Monto de Crédito (incluye gastos administrativos)
                    </label>

                    <!-- Input -->
                    <input type="number" step="0.01" class="form-control calculo" id="monto" value="1" name="monto" readonly>

                  </div>

                </div>

                
                
              </div> <!-- / .row -->

              <!-- Divider -->
              <hr class="mt-4 mb-5">

              <div class="row">
                <div class="col-12">

                  <div class="text-right">
                    <h5>Observaciones: <span id="observaciones"></span></h5>
                    <h5>Subtotal: $<span id="subtotal">0</span></h5>
                    <h5>Comisión: $<span id="comision">0</span></h5>
                    <h5>Costo Administrativo: $<span id="administrativo">0</span></h5>
                    <h5>Total Crédito: $<span id="total-credito">0</span></h5>
                  </div>

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

    $('.loop-productos').on( 'change keyup', '.producto-precio , .producto-nombre' , function(){
      precioProducto = $(this).parents('.producto-item').find('.producto-precio').val();
      precioConComision = parseFloat(precioProducto) + (parseFloat(precioProducto) * 0.35);
      $(this).parents('.producto-item').find('.precio_con_comision').html( '| Precio + comisión: $' + Math.round(precioConComision));
      contarPrecios();
    } );

    $('.producto-precio , .producto-nombre').change(function(){
      precioProducto = $(this).parents('.producto-item').find('.producto-precio').val();
      precioConComision = parseFloat(precioProducto) + (parseFloat(precioProducto) * 0.35);
      $(this).parents('.producto-item').find('.precio_con_comision').html( '| Precio + comisión: $' + Math.round(precioConComision));
      contarPrecios();
    } );

    $('.producto-precio , .producto-nombre').keyup(function(){
      precioProducto = $(this).parents('.producto-item').find('.producto-precio').val();
      precioConComision = parseFloat(precioProducto) + (parseFloat(precioProducto) * 0.35);
      $(this).parents('.producto-item').find('.precio_con_comision').html( '| Precio + comisión: $' + Math.round(precioConComision));
      contarPrecios();
    } );

    $('.btn-agregar-producto').click(function(){
      agregarProducto();
    });

    $('.loop-productos').on('click','.eliminar',function(){
      $(this).parents(".producto-item").remove();
      contarPrecios();
    });

    $('.calculo').keyup(function(){

      calcular();
    
    });

    $('.calculo').change(function(){

      calcular();
    
    });

    function contarPrecios()
    {
      precio = 0;
      productos = new Array();
      
        $('.producto-precio').each(function(){
          precio += parseFloat($(this).val());

          nombre = $(this).parents(".producto-item").find('.producto-nombre').val();
          precioProducto = $(this).parents(".producto-item").find('.producto-precio').val();
          
            producto = [nombre , precioProducto];
            productos.push(producto);
        });

        $('#productos-array').val(JSON.stringify(productos));
        //console.log(JSON.stringify(productos));

        // Comisión 35%
        comision = Math.round(precio * 0.35);
        //Precio gastos administrativos 10000
        admin = 10000;

        total = Math.round(precio + comision + admin);

        limiteUsuario = $('#usuario_seleccionado option:selected').data('limite');
    
        if(parseFloat(total) > parseFloat(limiteUsuario))
        {
          totalAntiguo = total;
          total = limiteUsuario;
          comision = Math.round((total / 1.35));
          excedente = parseFloat(precio) - parseFloat(comision) - parseFloat(admin);

          $('#observaciones').html('El usuario ha excedido su límite de crédito, para continuar debe cancelar al almacén la cantidad de $' + excedente);
        }else{
          $('#observaciones').html()
        }
        
        $('#subtotal').html(precio);
        $('#por_pagar').val(precio);
        $('#comision').html(comision);
        $('#administrativo').html(admin);
        $('#total-credito').html(total);
        $('#monto').val(total);



        calcular();
    }

    function agregarProducto()
    {
      producto = `<div class="producto-item"> 
                
                <div class="row">
                <div class="col-12 col-md-6"> <div class="form-group">
                    <label>
                      Nombre de Producto
                    </label>

                    <input type="text" class="form-control producto-nombre" name="producto[]" required>

                  </div>
                </div>
                <div class="col-11 col-md-5">
                  <div class="form-group">
                    <label>
                      Precio de Producto ($) <span class="precio_con_comision"></span>
                    </label>
                    <input type="number" class="form-control producto-precio" value="0" name="precio[]" required>
                  </div>
                </div>
                <div class="col-1 justify-content-center d-flex align-items-center">
                  <div class="eliminar bg-primary">X</div>
                </div>
                </div>
                
                </div>`;

      $('.loop-productos').append(producto);
    }

    function calcular()
    {
        $('.table-body').empty();

      monto = Math.round( parseFloat($('#monto').val()) );
      interesPorcentaje = parseFloat($('#interes').val());
      tasa = parseFloat(interesPorcentaje) / 100;
      cuotas = parseFloat($('#cuotas').val());

      // Cuota Fija
      valor = monto *( (tasa * Math.pow(1 + tasa, cuotas)) / (Math.pow(1 + tasa, cuotas) - 1) );
      valor = Math.round(valor);

      //Amortización
      valor_de_cuota = Math.round(valor);
      saldo_al_capital = Math.round(monto);
      items = new Array();

      for (i=0; i < cuotas; i++) {
          interes = Math.round(saldo_al_capital * tasa) ;
          abono_al_capital = Math.round(valor_de_cuota - interes);
          saldo_al_capital -= Math.round(abono_al_capital);
          numero = i + 1;
          
          interes = Math.round(interes);
          abono_al_capital = Math.round(abono_al_capital);
          saldo_al_capital = Math.round(saldo_al_capital);

          item = [numero, interes, abono_al_capital, valor_de_cuota, saldo_al_capital];
          items.push(item);
      }

     for (i = 0; i < items.length; i++) {
              item = items[i];
              if(i == items.length - 1)
              {
                if(item[4] > 0){
                  item[3] = item[3] + item[4];
                  item[4] = 0;
                }else{
                  item[4] = 0;
                }
              }
              $('.table-body').append('<tr><td>'+ item[0] +'</td><td>$' + item[1] + '</td><td>$' + item[2] + '</td><td>$' + item[3] + '</td><td>$' + item[4] + '</td></tr>');
          }

          $('#array').val(JSON.stringify(items));
          // console.log(JSON.stringify(items));

    }
   
  });
</script>



@endsection