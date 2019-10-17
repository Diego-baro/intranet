<script>
    $(function(){
       $("a").click(function(){
          var id= $(".id").html();
          var date= 12;
          alert(date);
          $('.myclass').html("<a href='{{  route('certificado.pdf', [ $empleado->id, $empleado->bday]) }}' class='btn btn-info'>555<i class='fas fa-file-download'></i></a>");
          });
       });
    </script>


<div class="row">
    @if(isset($empleado->Foto))
    <div class="col-md-4 order-md-2 mb-4">

        <h4 class="d-flex justify-content-between align-items-center mb-3">
      <span class="text-muted">{{$empleado->Nombre}} {{$empleado->SegundoNombre}}</span>
      <span class="badge badge-secondary badge-pill"></span>
    </h4>
        <ul class="list-group mb-3" style=" text-align: center;">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <img class="card-img-top" src="{{ asset('storage').'/'.$empleado->Foto }}" alt="Card image" style="width:100%">
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">

              <div class="form-group">
               <label >Seleccione fecha del Desprendible</label>
               <input type="date" name="bday" id="bday" max="3000-12-31"
                      min="1000-01-01" class="form-control">
              </div>

            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <small class="text-muted">Descargar Comprobante de pago</small>
                <a href="{{  route('users.pdf', [ $empleado->id, $empleado->bday ]) }}" class="btn btn-info"><i class="fas fa-file-download"></i></a>
            </li>
            <li class="list-group-item d-flex justify-content-between bg-light">
               <small class="text-muted">Descargar certificado laboral</small>

               <a href="{{  route('certificado.pdf', [ $empleado->id ]) }}" class="btn btn-info"><i class="fas fa-file-download"></i></a>


            </li>

        </ul>
    </div>
    @endif
    <div class="col-md-8 order-md-1">

        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="NumeroId" class="m-0 font-weight-bold text-primary">{{'Cedula'}}</label>
                    <input type="text" name="NumeroId" id="NumeroId" class="form-control form-control-user" value="{{ isset($empleado->NumeroId)?$empleado->NumeroId:'' }}" placeholder="[NumeroId]" required>

                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Nombre" class="m-0 font-weight-bold text-primary">{{'Nombre'}}</label>
                    <input type="text" name="Nombre" id="Nombre" class="form-control form-control-user" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" placeholder="[PRIMER NOMBRE]" required>

                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="SegundoNombre" class="m-0 font-weight-bold text-primary">{{'Segundo Nombre'}}</label>
                    <input type="text" name="SegundoNombre" id="SegundoNombre" class="form-control form-control-user" value="{{ isset($empleado->SegundoNombre)?$empleado->SegundoNombre:'' }}" placeholder="[SEGUNDO NOMBRE]">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="PrimerApellido" class="m-0 font-weight-bold text-primary">{{'Primer Apellido'}}</label>
                    <input type="text" name="PrimerApellido" id="PrimerApellido" class="form-control form-control-user" value="{{ isset($empleado->PrimerApellido)?$empleado->PrimerApellido:'' }}" placeholder="[PRIMER APELLIDO]" required>

                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Correo" class="m-0 font-weight-bold text-primary">{{'Correo'}}</label>
                    <input type="email" name="Correo" id="Correo" class="form-control form-control-user" value="{{ isset($empleado->Correo)?$empleado->Correo:'' }}" placeholder="[CORREO]" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Empresa" class="m-0 font-weight-bold text-primary">{{'Empresa'}}</label>
                    <input type="text" name="Empresa" id="Empresa" class="form-control form-control-user" value="{{ isset($empleado->Empresa)?$empleado->Empresa:'' }}" placeholder="[EMPRESA]" required>

                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Cargo" class="m-0 font-weight-bold text-primary">{{'Cargo'}}</label>
                    <input type="text" name="Cargo" id="Cargo" class="form-control form-control-user" value="{{ isset($empleado->Cargo)?$empleado->Cargo:'' }}" placeholder="[Cargo]" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="Salario" class="m-0 font-weight-bold text-primary">{{'Salario'}}</label>
                    <input type="text" name="Salario" id="Salario" class="form-control form-control-user" value="{{ isset($empleado->Salario)?$empleado->Salario:'' }}" placeholder="[Salario]" required>

                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="Tcontrato" class="m-0 font-weight-bold text-primary">{{'Tcontrato'}}</label>
                    <input type="text" name="Tcontrato" id="Tcontrato" class="form-control form-control-user" value="{{ isset($empleado->Tcontrato)?$empleado->Tcontrato:'' }}" placeholder="[Tcontrato]" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>
                    @if (Auth::user()->id < '3')
                <div class="col-md-6 mb-3">
                    <input type="file" class="custom-file-input" id="Foto" name="Foto">
                    <label class="custom-file-label" for="validatedCustomFile" placeholder="[FOTO]" required>{{'Foto'}}</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>
                @endif
            </div>

            <hr class="mb-4">
    @if (Auth::user()->id < '3')
<input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
  <a href="{{ url('empleados') }}" class="btn btn-primary">Regresar</a>
    @else
      <a href="{{ url('intro') }}" class="btn btn-primary">Regresar</a>
@endif




        </form>
    </div>
</div>
