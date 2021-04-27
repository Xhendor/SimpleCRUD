<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\Persona;
use Illuminate\Http\Request;

    class HolaController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//Para obtener todos
       $data=Empleado::all();

       $coco=Persona::find(1);
        //Para obtener todos con paginador
//        $data=Empleado::all()->paginate(5);
        //Para obtener datos especficos
//        $data=Empleado::where('edad','>','22')->get();
        return $coco->direccion;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ecreate');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required'
        ]);

        Empleado::create($request->all());

        return redirect()->route('hola.index')
            ->with('success','Empleado created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dato=Empleado::findOrFail($id);

        return view('eshow',compact('dato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dato=Empleado::findOrFail($id);

        return view('eedit',compact('dato'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dato=Empleado::findOrFail($id);

        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'edad' => 'required'
        ]);

        $dato->update($request->all());

        return redirect()->route('hola.index')
            ->with('success','Empleado updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $dato=Empleado::findOrFail($id);
            $dato->delete();

        return redirect()->route('hola.index')
            ->with('success','Empleado deleted successfully');

    }
}
