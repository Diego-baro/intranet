
@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{ url('/nominas/'.$nominas->id) }}" method="post" enctype="multipart/form-data">
  {{ csrf_field() }}
  {{ method_field('PATCH') }}

  @include('nominas.form',['Modo'=>'editar'])
</form>
<h1>Exportar datos</h1>
<p>
</p>
</div>
@endsection
