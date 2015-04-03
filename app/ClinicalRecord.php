<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClinicalRecord extends Model{

	protected $table = 'clinicalrecord';
	protected $primaryKey = 'idClinicalRecord';
	protected $fillable = array('patient_id','Weight','Size','Muscle','MetabolicAge');
					

	public function patient(){
		$this->belongsTo('Patient');
	}							
	
}