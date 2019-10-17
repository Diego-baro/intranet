<?php

namespace App\Http\Controllers;

use App\Empleados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
USE DB;






class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

      //$request->user()->authorizeRoles('admin');
      $datos['empleados']=Empleados::paginate(5);
      return view('empleados.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('empleados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //$datosEmpleado=request()->all();
        $datosEmpleado=request()->except('_token');
        if($request->hasFile('Foto')){
          $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Empleados::insert($datosEmpleado);
        //return response()->json($datosEmpleado);
        return redirect('empleados')->with('Mensaje', 'Epleado Agregado con èxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function show(empleados $empleados)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

      $empleado=Empleados::findOrFail($id);

      return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosEmpleado=request()->except(['_token','_method']);
        if($request->hasFile('Foto')){
          $empleado=Empleados::findOrFail($id);
          Storage::delete('public/'.$empleado->Foto);
          $datosEmpleado['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Empleados::where('id','=',$id)->update($datosEmpleado);
        //$empleado=Empleados::findOrFail($id);
        //return view('empleados.edit', compact('empleado'));

        return redirect('empleados')->with('Mensaje', 'Epleado Editado con èxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empleados  $empleados
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Empleados::destroy($id);
      return redirect('empleados');
    }

    public function exportarPdf($id)
    {

      $date = Carbon::now();
      $date = $date->toDateString();

      $user = DB::table('empleados')
      ->join('nominas', 'nominas.cedula' , '=' , 'empleados.NumeroId')
      ->select('empleados.NumeroId','nominas.cedula','empleados.Nombre','empleados.SegundoNombre', 'empleados.Nombre', 'empleados.SegundoNombre',
      'empleados.PrimerApellido', 'empleados.SegundoApellido', 'empleados.Empresa', 'empleados.Cargo', 'nominas.salario', 'nominas.diaslaborados',
      'nominas.totaldevengado', 'nominas.dctoeps', 'nominas.dctoafp', 'nominas.auxtransporte', 'nominas.totaldeducciones', 'nominas.totalapagar', 'nominas.salariodia', 'nominas.fechadepago')->where('empleados.id','=', $id)->where('fechadepago','=', '2019-10-15')->get();
      $pdf = PDF::loadView('pdf.user', compact('user'));
      return $pdf->download('Desprendible-de-nomina.pdf');

    }

    public function certificadoPdf($id, $date)
    {

      $user = DB::table('empleados')
      ->join('nominas', 'nominas.cedula' , '=' , 'empleados.NumeroId')
      ->select('empleados.NumeroId','nominas.cedula','empleados.Nombre','empleados.SegundoNombre', 'empleados.Nombre', 'empleados.SegundoNombre',
      'empleados.PrimerApellido', 'empleados.SegundoApellido', 'empleados.Empresa', 'empleados.Cargo', 'nominas.salario', 'nominas.diaslaborados',
      'nominas.totaldevengado', 'nominas.dctoeps', 'nominas.dctoafp', 'nominas.auxtransporte', 'nominas.totaldeducciones', 'nominas.totalapagar', 'nominas.salariodia', 'empleados.fecha_ingreso', 'empleados.Tcontrato')->where('empleados.id','=', $id)->get();
      $pdf = PDF::loadView('pdf.certificado', compact('user'));
      return $pdf->download('Certificado_laboral.pdf');

    }
    public function intro(Request $request)
    {
      return redirect('intro/intro');
      dd($request);
    }
    public function estadoactivo(Request $request)
    {

    }
}
