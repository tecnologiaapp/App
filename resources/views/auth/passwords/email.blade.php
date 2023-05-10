<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar contraseña</title>
    <link rel="stylesheet" href="{{ asset('assets/css/log.css')}}">
</head>
<body>
<section>
      <div class="page-header min-vh-75">
        <div class="container" style="max-height: 680px;">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-1">
                <div align="center">
                  <a href="{{ url('/') }}">
                  <img src="https://i.ibb.co/0tBchLL/logo-2.png" style="width: 190px; height: 190px;" alt="Logo">
                  </a>
                </div>
                <div class="card-header pb-0 text-center bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Recuperar contraseña</h3>
        
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <form method="POST" action="{{ route('password.email') }}">
                  @csrf
                    <label>Correo Electrónico</label>
                    <div class="mb-3">
                    <input id="email" type="email" placeholder="Ingresar correo electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                </div>
                
                
                    
                    <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Recuperar contraseña</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
</body>
</html>
