@extends('layouts.app')

@section('content')

  {{-- <section class="pages container">
    <div class="page page-about">

      <h1 class="text-capitalize">Te perdiste - Página no autorizada </h1>
      <span style="color:red">{{ $exception->getMessage() }}</span>

      <p><a href="{{ url()->previous() }}">Vuelve al camino</a></p>
    </div>
  </section> --}}

  <div class="container mt-24 text-center">
    <h1 id="dark-color-white" class="text-2xl p-3">
        Te perdiste! - Página no autorizada <a class="underline" href="{{ url()->previous() }}">Regresa al camino</a>  :)
    </h1>
    <span id="dark-color-white" class="text-2xl p-3" style="color:#E53E3E">{{ $exception->getMessage() }}</span>
  </div>
@endsection
