<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model{

	protected $table = 'patient';
	protected $primaryKey = 'idPatient';
	protected $fillable = array('Name','PermanentAddress','PhoneNumber','Mail','doctor_id'
		                		,'Age');
					

	public function doctor(){
		$this->belongsTo('Doctor');
	}

	public function diet(){
		$this->hasMany('Diet');
	}
	
	public function appointment(){
		$this->hasMany('Appointment');
	}							
	
	public function clinicalrecord(){
		$this->hasMany('ClinicalRecord')
	}
}