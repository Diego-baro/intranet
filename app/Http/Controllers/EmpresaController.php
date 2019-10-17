<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empresa']=Empresa::paginate(10);
        return view('empresa.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
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
        $datosEmpresa=request()->except('_token');
        if($request->hasFile('Foto')){
          $datosEmpresa['Foto']=$request->file('Foto')->store('uploads', 'public');
        }
        Empresa::insert($datosEmpresa);
        //return response()->json($datosEmpleado);
        return redirect('empresa')->with('Mensaje', 'Epleado Agregado con èxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
       $empresa=Empresa::findOrFail($id);
       return view('empresa.edit', compact('empresa'));
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
      $datosEmpresa=request()->except(['_token','_method']);
      if($request->hasFile('Foto')){
        $empresa=Empresa::findOrFail($id);
        Storage::delete('public/'.$empresa->Foto);
        $datosEmpresa['Foto']=$request->file('Foto')->store('uploads', 'public');
      }
      Empresa::where('id','=',$id)->update($datosEmpresa);
      //$empleado=Empleados::findOrFail($id);
      //return view('empleados.edit', compact('empleado'));

      return redirect('empresa')->with('Mensaje', 'Epleado Editado con èxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
      Empresa::destroy($id);
      return redirect('empresa');
    }
}
