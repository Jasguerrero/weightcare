<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Crypt;

class Doctor extends Model implements AuthenticatableContract, CanResetPasswordContract{

	use Authenticatable, CanResetPassword;

	protected $table = 'doctor';
	protected $primaryKey = 'idDoctor';
	
	protected $fillable = array('ProfessionalLicense','Name','PermanentAddress',
								'PhoneNumber','Mail', 'Password');

	protected $hidden = ['created_at','updated_at', 'Password','remember_token'];

	public function setPasswordAttribute($Password){
        $this->attributes['Password']=Crypt::encrypt($Password);
    }

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