<!-- Modal: Activity -->
    <div class="modal fade" id="sidebarModalActivity" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-vertical" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <!-- Title -->
            <h4 class="modal-title">
              Notificaciones
            </h4>

            <!-- Close -->
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>
        
          </div>
          <div class="modal-body">

            <!-- List group -->
            <div class="list-group list-group-flush my--3">
              
          
              @foreach(Auth::user()->mensajesNoLeidos()  as $mensaje)
              <a class="list-group-item px-0" href="{{ route('usuario.ver.mensaje' , $mensaje->id) }}">
                <div class="row mb-2">
                  
                  <div class="col ml--2">
                
                    <!-- Content -->
                    <div class="small text-muted">
                      <strong class="text-body">{{ $mensaje->asunto }}</strong> {{ str_limit($mensaje->mensaje , 20) }}.
                    </div>

                  </div>
                  <div class="col-auto">

                    <small class="text-muted">
                      {{ $mensaje->created_at->format('d/m') }}
                    </small>
                
                  </div>
                </div> <!-- / .row -->
                </a>
                @endforeach

              
             
            </div>

          </div>
        </div>
      </div>
    </div>