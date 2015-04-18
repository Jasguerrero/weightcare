<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Diet extends Model{

	protected $table = 'diet';
	protected $primaryKey = 'idDiet';
	protected $fillable = array('doctor_id','patient_id','RecipeDate');

	protected $hidden = ['created_at','updated_at'];
								
	public function doctor(){
		$this->belongsTo('Doctor');
	}

	public function patient(){
		$this->belongsTo('Patient');
	}

	public function recipe(){
		$this->hasMany('Recipe');
	}
								
	
}