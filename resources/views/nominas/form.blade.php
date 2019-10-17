<div class="container">
  <h2>Crear Nomina</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="cedula">cedula:</label>
      <input type="text" class="form-control" id="cedula" placeholder="[CEDULA]" name="cedula" value="{{ isset($nominas->cedula)?$nominas->cedula:'' }}">
    </div>
    <div class="form-group">
      <label for="Nombres">Nombres:</label>
      <input type="text" class="form-control" id="cedula" placeholder="[Nombres]"  readonly>
    </div>
    <div class="form-group">
      <label for="Apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="Apellidos" placeholder="[Apellidos]"  readonly>
    </div>
    <div class="form-group">
      <label for="fechadepago">Fecha de pago:</label>
      <input type="text" class="form-control" id="fechadepago" placeholder="[Fecha de pago]" value="{{ isset($nominas->fechadepago)?$nominas->fechadepago:'' }}" name="fechadepago">
    </div>
    <div class="form-group">
      <label for="cargo">Cargo:</label>
      <input type="text" class="form-control" id="cargo" placeholder="[Cargo]" name="cargo" value="{{ isset($nominas->cargo)?$nominas->cargo:'' }}">
    </div>
    <div class="form-group">
      <label for="diaslaborados">Dias laborados:</label>
      <input type="text" class="form-control" id="diaslaborados" placeholder="[Dias laborados]" name="diaslaborados" value="{{ isset($nominas->diaslaborados)?$nominas->diaslaborados:'' }}">
    </div>
    <div class="form-group">
      <label for="salario">Salario:</label>
      <input type="text" class="form-control" id="salario" placeholder="[Salario]" name="salario" value="{{ isset($nominas->salario)?$nominas->salario:'' }}">
    </div>
    <div class="form-group">
      <label for="salariodia">Salario dia:</label>
      <input type="text" class="form-control" id="salariodia" placeholder="[Salario dia]" name="salariodia" value="{{ isset($nominas->salariodia)?$nominas->salariodia:'' }}">
    </div>
    <div class="form-group">
      <label for="auxtransporte">Auxilio transporte:</label>
      <input type="text" class="form-control" id="auxtransporte" placeholder="[Auxilio transporte]" name="auxtransporte" value="{{ isset($nominas->auxtransporte)?$nominas->auxtransporte:'' }}">
    </div>
    <div class="form-group">
      <label for="auxilionosalarial">Auxilio no salarial:</label>
      <input type="text" class="form-control" id="auxilionosalarial" placeholder="[Auxilio no salarial]" name="auxilionosalarial" value="{{ isset($nominas->auxilionosalarial)?$nominas->auxilionosalarial:'' }}">
    </div>
    <div class="form-group">
      <label for="recargonocturno">Recargo nocturno:</label>
      <input type="text" class="form-control" id="recargonocturno" placeholder="[Recargo nocturno]" name="recargonocturno" value="{{ isset($nominas->recargonocturno)?$nominas->recargonocturno:'' }}">
    </div>




    <div class="form-group">
      <label for="hed">Hora extra diurna:</label>
      <input type="text" class="form-control" id="hed" placeholder="[Hora extra diurna]" name="hed" value="{{ isset($nominas->hed)?$nominas->hed:'' }}">
    </div>

    <div class="form-group">
      <label for="hen">Hora extra nocturna:</label>
      <input type="text" class="form-control" id="hen" placeholder="[Hora extra nocturna]" name="hen" value="{{ isset($nominas->hen)?$nominas->hen:'' }}">
    </div>
    <div class="form-group">
      <label for="hedf">Hora extra diurna festivo:</label>
      <input type="text" class="form-control" id="hedf" placeholder="[Recargo nocturno]" name="hedf" value="{{ isset($nominas->hedf)?$nominas->hedf:'' }}">
    </div>
    <div class="form-group">
      <label for="henf">Hora extra nocturna festivo:</label>
      <input type="text" class="form-control" id="henf" placeholder="[Recargo nocturno]" name="henf" value="{{ isset($nominas->henf)?$nominas->henf:'' }}">
    </div>

    <div class="form-group">
      <label for="totaldevengado">Total devengado:</label>
      <input type="text" class="form-control" id="totaldevengado" placeholder="[Total devengado]" name="totaldevengado" value="{{ isset($nominas->totaldevengado)?$nominas->totaldevengado:'' }}">
    </div>

    <div class="form-group">
      <label for="dctoeps">Descuentos EPS:</label>
      <input type="text" class="form-control" id="dctoeps" placeholder="[Descuentos EPS]" name="dctoeps" value="{{ isset($nominas->dctoeps)?$nominas->dctoeps:'' }}">
    </div>

    <div class="form-group">
      <label for="dctoafp">Descuentos ARL:</label>
      <input type="text" class="form-control" id="dctoafp" placeholder="[Descuentos ARL]" name="dctoafp" value="{{ isset($nominas->dctoafp)?$nominas->dctoafp:'' }}">
    </div>

    <div class="form-group">
      <label for="prestamos">Prestamos:</label>
      <input type="text" class="form-control" id="prestamos" placeholder="[Prestamos]" name="prestamos" value="{{ isset($nominas->prestamos)?$nominas->prestamos:'' }}">
    </div>

    <div class="form-group">
      <label for="ahorrofondo">Ahorro fondo:</label>
      <input type="text" class="form-control" id="ahorrofondo" placeholder="[Ahorro fondo]" name="ahorrofondo" value="{{ isset($nominas->ahorrofondo)?$nominas->ahorrofondo:'' }}">
    </div>

    <div class="form-group">
      <label for="totaldeducciones">Total deducciones:</label>
      <input type="text" class="form-control" id="totaldeducciones" placeholder="[Total deducciones]" name="totaldeducciones" value="{{ isset($nominas->totaldeducciones)?$nominas->totaldeducciones:'' }}">
    </div>

    <div class="form-group">
      <label for="totalapagar">Total a pagar:</label>
      <input type="text" class="form-control" id="totalapagar" placeholder="[Total a pagar]" name="totalapagar" value="{{ isset($nominas->totalapagar)?$nominas->totalapagar:'' }}">
    </div>

    <input type="submit" class="btn btn-primary" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'}}">
    <a href="{{ url('nominas') }}" class="btn btn-danger btn-icon-split">Regresar</a>
  </form>
</div>
