 @extends('master.auth')
 @section('content')
 <div class="container-fluid">
      <div class="row align-items-center justify-content-center">
        <div class="col-12 col-md-5 col-lg-6 col-xl-4 px-lg-6 my-5">

        	<div class="text-center mb-4">
        		<img src="{{ asset('img/logo.png') }}" style="max-width: 200px" class="img-fluid" alt="CloudBank">
        	</div>
              
          <!-- Heading -->
          <h1 class="display-4 text-center mb-3">
            Iniciar Sesión
          </h1>
         
          
          <!-- Form -->
          <form method="POST" action="{{ route('login') }}">
                        @csrf

            <!-- Email address -->
            <div class="form-group">

              <!-- Label -->
              <label>Email</label>

              <!-- Input -->
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
	                <span class="invalid-feedback" role="alert">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror

            </div>

            <!-- Password -->
            <div class="form-group">

              <div class="row">
                <div class="col">
                      
                  <!-- Label -->
                  <label>Contraseña</label>

                </div>
                <div class="col-auto">
                  
                  <!-- Help text -->
                  <a href="{{ route('password.request') }}" class="form-text small text-muted">
                    ¿Olvidó su contraseña?
                  </a>

                </div>
              </div> <!-- / .row -->

              <!-- Input group -->
              <div class="input-group input-group-merge">

                <!-- Input -->
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Icon -->
                <div class="input-group-append">
                  <span class="input-group-text mostrar-contraseña">
                    <i class="fe fe-eye"></i>
                  </span>
                </div>

              </div>

              <div class="form-group mt-2">
                            
                                <div class="form-check">
                                    <input class="form-check-input" class="form-control" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            
                        </div>
            </div>

            <!-- Submit -->
            <button class="btn btn-lg btn-block btn-primary mb-3">
              Ingresar
            </button>

            
            
          </form>

        </div>
        <div class="col-12 col-md-7 col-lg-6 col-xl-8 d-none d-lg-block">
          
          <!-- Image -->
          <div class="bg-cover vh-100 mt--1 mr--3" style="background-image: url(' {{ asset('img/business.jpg') }} ');"></div>

        </div>
      </div> <!-- / .row -->
    </div>
    @endsection

    @section('scripts')
    <script>
    	$(document).ready(function(){
    		$('.mostrar-contraseña').click(function(){
    			if ($('#password').attr('type') === 'text') {
			     $('#password').attr('type', 'password');
			    } else {
			     $('#password').attr('type', 'text');
			    }
    		});
    	});
    </script>
    @endsection
