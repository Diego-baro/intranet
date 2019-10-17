@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/contrato')}}" method="post" enctype="multipart/form-data" class="user">
  {{ csrf_field() }}
  @include('contrato.form',['Modo'=>'crear'])

</form>
</div>
@endsection
