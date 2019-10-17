
@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/empresa/'.empresas->id) }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  @include('empresa.form',['Modo'=>'editar'])
</form>
</div>
@endsection
