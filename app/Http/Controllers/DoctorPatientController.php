<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Patient;

use Illuminate\Http\Request;

class DoctorPatientController extends Controller {

	public function __construct(){
		$this->middleware('auth.basic',['only'=>['store','update','destroy']]);
	}
	
	public function index($id)
	{
		$doctor = Doctor::find($id);

		if(!$doctor){
			return response()->json(['message'=>'There is no such Doctor','code'=>404],404);
		}
		else
			return response()->json(['data'=>$doctor->patient],200);
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
	public function store(Request $request, $id)
	{
		if(!$request->input('Mail') || !$request->input('Name') || !$request->input('Age')||
			!$request->input('PermanentAddress') || !$request->input('PhoneNumber')){

			return response()->json(['message'=>'The patient was not created','code'=>422],422);
		}

		$doctor = Doctor::find($id);

		if(!$doctor){
			return response()->json(['message'=>'There is no such doctor','code'=>404],404);
		}
		
		$doctor->patient()->create($request->all());
		return response()->json(['message' => 'Patient created'],201);
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
