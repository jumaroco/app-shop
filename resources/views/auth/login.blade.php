@extends('layouts.app')

@section('body-class','signup-page sidebar-collapse')

@section('content')
  <div class="page-header header-filter section-signup" filter-color="purple" style="background-image: url(' {{ asset('/img/bg7.jpg') }}')">
  <div class="container">          
        <div class="row">
                    <div class="col-md-4 ml-auto mr-auto">
                      <div class="card card-signup">
                          <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                              {{ csrf_field() }}

                          <div class="card-header card-header-primary text-center">
                            <h4>Inicio de sesión</h4>
                           {{--  <div class="social-line">
                              <a href="#pablo" class="btn btn-link btn-just-icon">
                                <i class="fa fa-facebook-square"></i>
                              </a>
                              <a href="#pablo" class="btn btn-link btn-just-icon">
                                <i class="fa fa-twitter"></i>
                              </a>
                              <a href="#pablo" class="btn btn-link btn-just-icon">
                                <i class="fa fa-google-plus"></i>
                              </a>
                            </div> --}}
                          </div>
                          <p class="text-divider">Ingresa tus datos</p>
                          <div class="card-body">
            
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">email</i>
                                </span>
                              </div>
                              <input id="email" type="email" class="form-control" name="email" placeholder="Email..." value="{{ old('email') }}" required autofocus>
                            </div>
            
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                          
                              <input id="password" type="password" class="form-control" placeholder="Password..." name="password" required>
                            </div>
                           
            
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    Recordar sesión
                                    <span class="form-check-sign">
                                        <span class="check"></span>
                                    </span>
                                </label>
                            </div>
                          </div>
                          <div class="card-footer justify-content-center">
                            <button type="submit" class="btn btn-link btn-primary btn-lg">Ingresar</button>
                          </div>
                          {{--  <a class="btn btn-link" href="{{ route('password.request') }}">
                              Forgot Your Password?
                          </a>  --}}
                        </form>
                      </div>
                    </div>
                  </div>
    </div>
</div>
{{-- </div> --}}
@endsection
