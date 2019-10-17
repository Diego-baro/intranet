

   <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <h6 class="m-0 font-weight-bold text-primary">Nuevo Empresa</h6>
   </div>
   <hr>
   <aside class="col-sm-12">

      <div class="form-group">
         <label for="NombreEmpresa" class="m-0 font-weight-bold text-primary">{{'Nombre Empresa'}}</label>
         <input type="text" name="NombreEmpresa" id="NombreEmpresa"  class="form-control form-control-user" value="{{ isset($empresas->NombreEmpresa)?$empresas->NombreEmpresa:'' }}" placeholder="[NumeroId]" required>
      </div>
      <div class="form-group">
         <label for="Direccion" class="m-0 font-weight-bold text-primary">{{'Direccion'}}</label>
         <input type="text" name="Direccion" id="Direccion"  class="form-control form-control-user" value="{{ isset($empresas->Direccion)?$empresas->Direccion:'' }}" placeholder="[PRIMER NOMBRE]" required>
      </div>
      <div class="form-group">
         <label for="Rut" class="m-0 font-weight-bold text-primary">{{'Rut'}}</label>
         <input type="text" name="Rut" id="Rut"  class="form-control form-control-user" value="{{ isset($empresas->Rut)?$empresas->Rut:'' }}" placeholder="[SEGUNDO NOMBRE]">
      </div>
      <div class="form-group" class="m-0 font-weight-bold text-primary">
         <label for="NombreContacto" class="m-0 font-weight-bold text-primary">{{'Nombre Contacto'}}</label>
         <input type="text" name="NombreContacto" id="NombreContacto" class="form-control form-control-user" value="{{ isset($empresas->NombreContacto)?$empresas->NombreContacto:'' }}" placeholder="[PRIMER APELLIDO]" required>
      </div>
      <div class="form-group" class="m-0 font-weight-bold text-primary">
         <label for="Telefono" class="m-0 font-weight-bold text-primary">{{'Telefono'}}</label>
         <input type="text" name="Telefono" id="Telefono"  class="form-control form-control-user" value="{{ isset($empresas->Telefono)?$empresas->Telefono:'' }}" placeholder="[SEGUNDO APELLIDO]">
      </div>

      <br><br>
      <input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
      <a href="{{ url('empleados') }}" class="btn btn-danger btn-icon-split">Regresar</a>
   </aside>
</div>
