<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;

use Illuminate\Http\Request;

class DoctorController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function __construct(){
		$this->middleware('auth.basic',['only'=>['store','update','destroy']]);
	}

	public function index()
	{
		return response()->json(['data'=>Doctor::all()],200);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(!$request->input('Mail') || !$request->input('Name') || !$request->input('ProfessionalLicense')||
			!$request->input('PermanentAddress') || !$request->input('PhoneNumber')){
			return response()->json(['message'=>'The doctor was not created','code'=>422],422);
		}
		Doctor::create($request->all());
		return response()->json(['message' => 'Doctor created'],201);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$doctor = Doctor::find($id);
		if(!$doctor){
			return response()->json(['message'=>'The doctor was not found','code'=>404],404);
		}
		return response()->json(['data'=>$doctor],200);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
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

}
