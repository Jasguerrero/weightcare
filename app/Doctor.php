<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model{

	protected $table = 'doctor';
	protected $primaryKey = 'idDoctor';
	protected $fillable = array('ProfessionalLicense','Name','PermanentAddress',
								'PhoneNumber','Mail');

	public function diet(){
		$this->hasMany('Diet');
	}

	public function appointment(){
		$this->hasMany('Appointment');
	}

	public function patient(){
		$this->hasMany('Patient');
	}

}