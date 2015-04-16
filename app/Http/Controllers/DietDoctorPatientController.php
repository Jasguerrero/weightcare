<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Diet;
use App\Doctor;
use App\Patient;

class DietDoctorPatientController extends Controller {

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
	public function show($idDiet, $idDoctor, $idPatient)
	{
		$Diet = Diet::find($idDiet);
		$Doctor = Doctor::find($idDoctor);
		$Patient = Patient::find($idPatient);

		$patient_id = $idPatient;
		$doctor_id = $idDoctor;
		$lel = Diet::find($patient_id);
		$lel2 = Diet::find($doctor_id);

		if($lel == Diet::find($patient_id) && $lel2 == Diet::find($doctor_id)){
			return response()->json(['data'=>$Diet,200]);

		}
		else 
			return response()->json(['mensaje'=>'There is no such Diet','code'=>404],404);
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
