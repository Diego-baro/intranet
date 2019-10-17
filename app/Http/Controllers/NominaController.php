<?php

namespace App\Http\Controllers;

use App\Nomina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class NominaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos['nominas']=Nomina::paginate(10);
      return view('nominas.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('nominas.create');
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
        $datosNomina=request()->except('_token');
        if($request->hasFile('Foto')){
          $datosNomina['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Nomina::insert($datosNomina);
        //return response()->json($datosEmpleado);
        return redirect('nominas')->with('Mensaje', 'Epleado Agregado con èxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function show(Nomina $nomina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $nominas=Nomina::findOrFail($id);

      return view('nominas.edit', compact('nominas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nomina $nomina)
    {
      $datosNomina=request()->except(['_token','_method']);
      if($request->hasFile('Foto')){
        $nominas=Nomina::findOrFail($id);
        Storage::delete('public/'.$nominas->Foto);
        $datosNomina['Foto']=$request->file('Foto')->store('uploads', 'public');
      }
      Nomina::where('id','=',$id)->update($datosNomina);
      //$empleado=Empleados::findOrFail($id);
      //return view('empleados.edit', compact('empleado'));

      return redirect('empleados')->with('Mensaje', 'Epleado Editado con èxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nomina  $nomina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nomina $nomina)
    {
      Nomina::destroy($id);
      return redirect('nominas');
    }
}
