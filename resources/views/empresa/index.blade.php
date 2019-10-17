@extends('layouts.app')
@section('content')
@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif
<div class="row">
   <div class="col-xl-12 col-lg-12">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
         <h6 class="m-0 font-weight-bold text-primary">Empresas</h6>
         <a href="{{ url('empresa/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Agregar Empresa</a>
      </div>
      <div class="container-fluid">
         <div class="card-body" style="padding-left: 0px; padding-right: 0px;">
            <div>
               <table class="table" id="" width="100%" cellspacing="0">
                  <thead class="center-text">
                     <tr>
                        <th>Id</th>
                        <th>Nombre Empresa</th>
                        <th>Direccion</th>
                        <th>Rut</th>
                        <th>Nombre Contacto</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                     </tr>
                  </thead>
                  <tbody class="center-text">
                     @foreach($empresa as $empresas)
                     <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$empresas->NombreEmpresa}}</td>
                        <td>{{$empresas->Direccion}}</td>
                        <td>{{$empresas->Rut}}</td>
                        <td>{{$empresas->NombreContacto}}</td>
                        <td>{{$empresas->Telefono}}</td>
                        <td>
                           <form class="{{ url('/empresa/'.$empresas->id)}}"  method="post">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <a href="{{ url('/empresa/'.$empresas->id.'/edit') }}" class="btn btn-success btn-icon-split" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-edit"></i></a>
                              <button type="submit" onclick="return confirm('Borrar?');" class="btn btn-danger btn-icon-split" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></button>
                           </form>
                        </td>
                     </tr>
                     @endforeach
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
