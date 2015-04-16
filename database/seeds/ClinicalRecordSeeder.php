<?php

use Illuminate\Database\Seeder;
use App\ClinicalRecord;
use App\Patient;
use Faker\Factory as Faker;

class ClinicalRecordSeeder extends Seeder 
{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$faker = Faker::create();
		$countpatient = Patient::all()->count();

		 for($i = 1; $i<$countpatient+1; $i++)
		{
		 	ClinicalRecord::create
		 	([
		 		'patient_id'=> $i,
		 		'Weight' => $faker->numberBetween(80,150),
		 		'Size' => $faker->numberBetween(25,48),
		 		'Muscle' => $faker->numberBetween(20,40),
		 		'MetablicAge' => $faker->numberBetween(20,50)
		 	]);
		}
	}
}