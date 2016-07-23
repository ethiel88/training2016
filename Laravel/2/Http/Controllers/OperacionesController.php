<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class OperacionesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}

	public function action1(){
		return "OPERACIONES ACTION 1";
	}
	public function action2(){
		return "OPERACIONES ACTION 2";
	}
	public function action3(){
		return "OPERACIONES ACTION 3";
	}

	public function action4(){
		return "OPERACIONES ACTION 4";
	}

	public function action5(Request $request, $a, $b){
		$c = $a + $b;
		/*$view = view('procesos.suma');
		$view->with("operador1", $a);
		$view->withOperador2($b);
		$view->withSuma($c);*/
		$data = array("operador1"=>$a,"operador2"=>$b,"suma"=>$c);
		$view = view('procesos.suma', $data);
		return $view;
	}

	public function action6(Request $request, $id){
		//$sql = "SHOW TABLES";
		$ans = DB::select(
			"SELECT * FROM estudiante WHERE id=? OR id=?" ,[1, 5]  );
		dd($ans);
		return "action6";
	}
}
