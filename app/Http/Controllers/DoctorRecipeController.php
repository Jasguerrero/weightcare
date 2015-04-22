<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Doctor;
use App\Recipe;

class DoctorRecipeController extends Controller {

	 public function __construct(){
		$this->middleware('auth.basic',['only'=>['store','update','destroy']]);
	}
	
	public function index($idDoctor)
	{
		$Doctor = Doctor::find($idDoctor);

		if(!$Doctor){
			return response()->json(['message'=>'There is no such doctor','code'=>404],404);
		}
		else
			return response()->json(['data'=>$Doctor->recipe],200);
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
		if(!$request->input('Ingredients') || !$request->input('Image')|| !$request->input('Description')
			|| !$request->input('Calories') || !$request->input('diet_id')){

			return response()->json(['message'=>'The diet was not created','code'=>422],422);
		}

		$doctor = Doctor::find($idDoctor);

		if(!$doctor){
			return response()->json(['message'=>'There is no such doctor','code'=>404],404);
		}
		
		$doctor->recipe()->create($request->all());
		return response()->json(['message' => 'Recipe created'],201);
	}


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
