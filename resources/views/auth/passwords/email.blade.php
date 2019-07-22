@extends('layouts.app')

@section('content')
<div class="container cointainerResetPassword">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Olvidaste tu contraseña?</h1>
               <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->

                <div class="card-body bodyResetPassword">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMail:') }}</label>

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
                                    {{ __('Enviar Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- <section class="section1">
            <article class="article1">
            <h1>Olvidaste la contraseña?</h1> <hr>
            <form method="POST" action="">
                    <div class="inputs">
                      <label for="email">Email:</label> <br>
                      <input name="email" type="email" id="exampleInputEmail1" aria-describedby="emailHelp" value="" placeholder="Ingrese email..." required > <br>
                      <span class="errores"> {{$errors->first('email')}} </span>
                      <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <button type="submit">Enviar</button> <br>
                    <hr class="opt">
                  </form>
            </article>
        </section> -->

