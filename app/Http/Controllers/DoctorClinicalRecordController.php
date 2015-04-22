<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorClinicalRecordController extends Controller {

	public function __construct(){
		$this->middleware('auth.basic',['only'=>['store','update','destroy']]);
	}

	public function index($idDoctor)
	{
		$doctor = Doctor::find($idDoctor);

		if(!$doctor){
			return response()->json(['message'=>'There is no such doctor','code'=>404],404);
		}
		else
			return response()->json(['data'=>$doctor->clinicalrecord],200);
	
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
	public function store(Request $request, $idDoctor)
	{
		if(!$request->input('Weight') || !$request->input('Size')|| !$request->input('MetabolicAge')
			|| !$request->input('patient_id') || !$request->input('Muscle')){

			return response()->json(['message'=>'The clinical record was not created','code'=>422],422);
		}

		$doctor = Doctor::find($idDoctor);

		if(!$doctor){
			return response()->json(['message'=>'There is no such doctor','code'=>404],404);
		}
		
		$doctor->clinicalrecord()->create($request->all());
		return response()->json(['message' => 'Clinical Record created'],201);
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

}
