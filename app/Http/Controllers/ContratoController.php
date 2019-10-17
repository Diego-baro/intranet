<?php

namespace App\Http\Controllers;

use App\Contrato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $datos['contrato']=Contrato::paginate(10);
      return view('contrato.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('contrato.create');
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
        $datosContrato=request()->except('_token');
        if($request->hasFile('Foto')){
          $datosContrato['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Contrato::insert($datosContrato);
        //return response()->json($datosEmpleado);
        return redirect('contrato')->with('Mensaje', 'Epleado Agregado con èxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function show(Contrato $contrato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contrato $contrato)
    {
      $contrato=Contrato::findOrFail($id);
      return view('contrato.edit', compact('contrato'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contrato $contrato)
    {
      $datosContrato=request()->except(['_token','_method']);
      if($request->hasFile('Foto')){
        $contratoa=Contrato::findOrFail($id);
        Storage::delete('public/'.$contrato->Foto);
        $datosContrato['Foto']=$request->file('Foto')->store('uploads', 'public');
      }
      Contrato::where('id','=',$id)->update($datosContrato);
      //$empleado=Empleados::findOrFail($id);
      //return view('empleados.edit', compact('empleado'));

      return redirect('contrato')->with('Mensaje', 'Epleado Editado con èxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contrato  $contrato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contrato $contrato)
    {
      Contrato::destroy($id);
      return redirect('contrato');
    }
}
