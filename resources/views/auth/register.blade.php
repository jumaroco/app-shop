@extends('layouts.app')
@section('body-class','signup-page sidebar-collapse')
@section('content')
<div class="page-header header-filter" filter-color="purple" style="background-image: url(' {{ asset('/img/bg7.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto">
          <div class="card card-signup">
            <h2 class="card-title text-center">Registro</h2>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 mr-auto">
                  <div class="social text-center">
                   {{--    <div class="social-line">
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
                    <h4> Completa tus datos </h4>
                  </div>
                  <form class="form" method="POST" action="{{ route('register') }}">
                      {{ csrf_field() }}

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">face</i>
                          </span>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nombre..." required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">mail</i>
                          </span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="Correo electrónico..." value="{{ old('email') }}" required autofocus>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">
                            <i class="material-icons">lock_outline</i>
                          </span>
                        </div>
                        <input type="password" name="password" placeholder="Contraseña..." class="form-control" />
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <input type="password" name="password_confirmation" placeholder="Confirmar contraseña..." class="form-control" />
                        </div>
                      </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-round">Confirmar registro</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="container">
        <nav class="float-left">
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="https://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="https://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="https://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright float-right">
          &copy;
          <script>
            document.write(new Date().getFullYear())
          </script>, made with <i class="material-icons">favorite</i> by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
        </div>
      </div>
    </footer>
  </div>
@endsection
