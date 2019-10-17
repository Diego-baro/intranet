<!DOCTYPE html>

<html>
   <head>
      <style>
         table {
         font-family: Calibri;
         width: 80%;
         }
         td,
         th {
         text-align: left;
         padding: 2px;
         }
         h2 {
         width: 90%;
         text-align: center;
         border-bottom: 1px solid #000;
         line-height: 0.1em;
         margin: 10px 0 20px;
         }
         h2 span {
         background: #fff;
         padding: 0 10px;
         }
         div { border-bottom-style: double; border-bottom-width: 1px; }
      </style>
   </head>
   <body style="text-align: center;">
      <img src="{{ asset('img/pdflogo.png') }}" alt="70%"  width="70%">
      <table>
         <tr>
            <th>&nbsp;</th>
         </tr>
         <tr>
            <th>Empresa:</th>
            <th style="font-weight: normal;">Seleccionamos y Apoyamos SAS </th>
         </tr>
         <tr>
            <th>NIT:</th>
            <th style="font-weight: normal;">900711126-5</th>
         </tr>
         <tr>
            <th>Dirección:</th>
            <th style="font-weight: normal;">Carrera 71 No. 48A - 55 Normandía</th>
         </tr>
         <tr>
            <th>Teléfono:</th>
            <th style="font-weight: normal;">263 35 91 - 321 4119187</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>COMPROBANTE DE PAGO DE NÓMINA</th>
         </tr>
         <tr>
            <th style="font-size:11; font-weight: lighter;">1 al 30 de julio de 2019</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table>
         <tr>
            <th>Empleado:</th>
            <th style="font-weight: normal;">{{$user[0]->Nombre}} {{$user[0]->SegundoNombre}} {{$user[0]->PrimerApellido}} {{$user[0]->SegundoApellido}}</th>
         </tr>
         <tr>
            <th>Cédula:</th>
            <th style="font-weight: normal;">{{$user[0]->cedula}}</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>Sueldo mensual:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->salario) }}</th>
         </tr>
         <tr>
            <th>Días laborados:</th>
            <th style="font-weight: normal;">{{$user[0]->diaslaborados}} días</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>DEVENGADO</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th>DEDUCCIONES</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>Sueldo quincena:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->salariodia)}}</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th>Aporte salud:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->dctoeps)}}</th
         </tr>
         <tr>
            <th>Auxilio de transporte:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->auxtransporte) }}</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th>Aporte pensión:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->dctoafp) }}</th
         </tr>
         <tr>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th>Préstamos:</th>
            <th style="font-weight: normal;"></th
         </tr>
         <tr>
            <th>&nbsp;</th>
            </tr
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>Total devengado:</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->totaldevengado)}}</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th>Total deducciones:</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->totaldeducciones) }}</th
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
         <tr>
            <th>TOTAL A PAGAR:</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">$&nbsp;{{ number_format($user[0]->totalapagar) }}</th>
            <th style="font-weight: normal;">&nbsp;</th>
            <th style="font-weight: normal;">&nbsp;</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>&nbsp;</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
         <tr>
            <th>&nbsp;</th>
         </tr>
         <tr>
            <th style="font-weight: normal;">
               <h2><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
         </tr>
      </table>
      <table style="  font-family: Aharoni;">
         <tr>
            <th>Empresa</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>{{$user[0]->Nombre}} {{$user[0]->SegundoNombre}} {{$user[0]->PrimerApellido}} {{$user[0]->SegundoApellido}}</th>
         </tr>
         <tr>
            <th style="font-weight: normal;">Empresa</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th style="font-weight: normal;">CC</th>
         </tr>
         <tr>
            <th style="font-weight: normal;">Entrega</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th style="font-weight: normal;">Recibe</th>
         </tr>
      </table>
   </body>
</html>
