<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Crypt;

class Patient extends Model implements AuthenticatableContract, CanResetPasswordContract{

	use Authenticatable, CanResetPassword;

	protected $table = 'patient';

	protected $primaryKey = 'idPatient';

	protected $fillable = array('Name','PermanentAddress','PhoneNumber','Mail','doctor_id'
		                		,'Age','Password');

	protected $hidden = ['created_at','updated_at', 'Password','remember_token'];

	public function setPasswordAttribute($Password){
        $this->attributes['Password']=Crypt::encrypt($Password);
    }

					

	public function doctor(){
		return $this->belongsTo('App\Doctor');
	}

	public function diet(){
		return $this->hasMany('App\Diet');
	}
	
	public function appointment(){
		return $this->hasMany('App\Appointment');
	}							
	
	public function clinicalrecord(){
		return $this->hasMany('App\ClinicalRecord');
	}
}