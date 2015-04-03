<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model{

	protected $table = 'recipe';
	protected $primaryKey = 'idRecipe';
	protected $fillable = array('Ingredients','Image','Description','Calories','diet_id');
					

	public function diet(){
		$this->belongsTo('Diet');
	}							
	
}