
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
   <h6 class="m-0 font-weight-bold text-primary">Editar Contrato</h6>
</div>
<div class="row">
   <aside class="col-sm-12">
   <hr>
   <aside class="col-sm-12">
      <div class="form-group">
         <label for="NumeroId" class="m-0 font-weight-bold text-primary">{{'Contrato'}}</label>
         <input type="text" name="Contrato" id="Contrato"  class="form-control form-control-user" value="{{ isset($contratos->Contrato)?$contratos->Contrato:'' }}" placeholder="[Contrato]" required>
      </div>
      <input id="Estado" name="Estado" type="hidden" value="{{ isset($contratos->Estado)?$contratos->Estado:'ACTIVO' }}">
      <br><br>
      <input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
      <a href="{{ url('contrato') }}" class="btn btn-danger btn-icon-split">Regresar</a>
   </aside>
</div>
