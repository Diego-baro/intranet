@extends('layouts.app')
@section('content')
<div class="jumbotron">
  <h1 class="display-4">Hola, {{Auth::user()->name}}</h1>
  <p class="lead">Benvenido de nuevo</p>
  <hr class="my-4">
  <p>Puedes usar este espacio para descargar tu cerificado laboral y comprobantes de pago.</p>
  <p class="lead">
    @if(Auth::user()->id == 1 OR Auth::user()->id == 2)
    <a class="btn btn-primary btn-lg" href="{{ url('/empleados/') }}" role="button">Empleados</a>
    @else
  <a class="btn btn-primary btn-lg" href="{{ url('/empleados/'.Auth::user()->id.'/edit') }}" role="button">Mi perfil</a>
  @endif
  </p>
</div>

@endsection
