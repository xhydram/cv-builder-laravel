@extends('layouts.base')

@section('title')

@endsection


@section('style')
<style>

    body{
        max-width: 100vw;
        overflow: hidden;
    }

    main{
        min-height: 100vh;
        max-width: 400px;
    }

    main > .row{
        margin-top: 120px;
    }

    .mx-auto{
        margin-left: 0;
        margin-top: 0;
    }

    .my-auto{
        margin-top: auto;
        margin-bottom: auto;
    }
    
    .img-logo{
        width: 50%;
    }

    input[type="password"],
    input[type="email"]{
        height: 60px;
    }

    input[type="email"]{
        border-radius: 5px 5px 0 0;
    }

    input[type="password"]{
        border-radius: 0 0 5px 5px;
    }


</style>
@endsection

@section('contenido')

@component('components.menu') @endcomponent

<main class="mx-auto ">
    <div class="row ml-0 mr-0">
        <div class="col-md-12 text-center mb-4">
            <img src="https://image.flaticon.com/icons/svg/2452/2452172.svg" class="img-logo mb-4" alt="logo">
            <h3>Sign In</h3>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row justify-content-center">
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-4 mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
        </div>
    </div>
</main>

@endsection
