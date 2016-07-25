<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use \App\Estudiante;

class RegistroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$estudiantes = Estudiante::all();
		//$view->withEstudiantes = $estudiantes;
		$view = view('registro.index', ['estudiantes'=>$estudiantes]);
		return $view;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('registro.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$estudiante = new Estudiante;
		$estudiante->nombres = $request->nombres;
		$estudiante->apellido_paterno = $request->apellido_paterno;
		$estudiante->apellido_materno = $request->apellido_materno;
		//dd($estudiante);
		$estudiante->save();
		return redirect()->route('registro.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$estudiante = Estudiante::find($id);
		dd($estudiante);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$estudiante = Estudiante::find($id);
		return view('registro.edit', ['estudiante'=>$estudiante]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
		$estudiante = Estudiante::find($id);
		$estudiante->nombres = $request->nombres;
		$estudiante->apellido_paterno = $request->apellido_paterno;
		$estudiante->apellido_materno = $request->apellido_materno;
		$estudiante->save();
		return redirect()->route('registro.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$estudiante = Estudiante::find($id);
		$estudiante->delete();
		return redirect()->route('registro.index');
	}

	public function eliminar($id){
		$estudiante = Estudiante::find($id);
		$estudiante->delete();
		return redirect()->route('registro.index');
	}

}
