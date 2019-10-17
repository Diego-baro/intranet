@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/empresa')}}" method="post" enctype="multipart/form-data" class="user">
  {{ csrf_field() }}
  @include('empresa.form',['Modo'=>'crear'])

</form>
</div>
@endsection
