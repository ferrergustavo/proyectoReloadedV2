@extends('layouts.app')

@section('content')
<section class="section1">
            <article class="article1">
            <h1>Olvidaste la contraseña?</h1> <hr>
            <form method="POST" action="">
                    <div class="inputs">
                      <label for="email">Email</label> <!--NAME="email"--> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email..." required > <br>
                      <span class="errores"> {{$errors->first('email')}} </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="inputs">
                      <label for="contra">Nueva contraseña</label> <!--NAME="password"--> <br>
                      <input name="pass" type="password" id="exampleInputPassword1" placeholder="Contraseña"required > <br>
                      <span class="errores"> {{$errors->first('password')}} </span>
                      <small class="smalls"><p> La contraseña debe tener al menos 6 caracteres.</p></small>
                    </div>
                    <div class="inputs">
                            <label for="confirmcontra">Confirmar nueva contraseña</label> <br> <!--NAME="repassword"-->
                            <input name="password_confirmation" type="password" id="exampleInputPassword1" placeholder=" Confirme la nueva contraseña" required> <br>
                            <span class="errores"> <?= isset($errores["repass"])?$errores["repass"]:null; ?> </span>                     
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <hr class="opt">
                  </form>
            </article>
        </section>

<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>-->
@endsection
