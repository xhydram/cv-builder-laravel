@extends('layouts.base')

@section('title')
CV Builder
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/app.css')}}">
@endsection

@section('contenido')
<div class="container container-styles p-0 position-relative">

    <nav class="container-fluid mb-lg-5">
        <div class="row text-white text-right pt-3 pb-3">
            <div class="col-4 offset-8 col-xl-1 offset-xl-10 "><a class="text-white" href="/login">Login</a></div>
            <div class="col-4 offset-8 col-xl-1 offset-xl-0  "><a class="text-white" href="/register">Sign Up</a></div>
        </div>
    </nav>

    <main class="container-fluid text-white pt-lg-5">
        <div class="row">
            <div class="col-12 text-center col-lg-6">
                <img src="https://image.flaticon.com/icons/svg/2452/2452172.svg" alt="cvLogo" class="img-fluid">
            </div>
            <div class="col-12 col-lg-6 mb-auto mt-auto hero-info text-center text-lg-left">
                <h1>CV Builder</h1>
                <p>
                    Make your cv's efficiently and creatively to impact the recruiters
                </p>
                <a href="#" class="btn btn-dark pt-3 pb-3 pr-5 pl-5">Make your first cv!</a>
            </div>
        </div>
    </main>


    <footer class="container-fluid pt-3 pb-3">
        <div class="row">
            <div class="col text-center">
                <a href="#">@xhydram</a>
            </div>
        </div>
    </footer>

</div>
@endsection