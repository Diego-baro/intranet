@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/nominas')}}" method="post" enctype="multipart/form-data" class="user">
  {{ csrf_field() }}
  @include('nominas.form',['Modo'=>'crear'])

</form>
</div>
@endsection
