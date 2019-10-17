@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/empleados')}}" method="post" enctype="multipart/form-data" class="user">
  {{ csrf_field() }}
  @include('empleados.form',['Modo'=>'crear'])

</form>
</div>
@endsection
