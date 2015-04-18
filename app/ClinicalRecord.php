<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicalRecord extends Model{

	protected $table = 'clinicalrecord';
	protected $primaryKey = 'idClinicalRecord';
	protected $fillable = array('patient_id','Weight','Size','Muscle','MetabolicAge');

	protected $hidden = ['created_at','updated_at'];
					

	public function patient(){
		$this->belongsTo('Patient');
	}							
	
}