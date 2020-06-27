<?php
use Illuminate\Database\Seeder;

class EtudiantSeeder extends Seeder{
	public function run(){
		DB::table('etudiants')->delete();

		DB::table('etudiants')->insert([
            'user_id'=>3
        ]);

        DB::table('etudiants')->insert([
            'user_id'=>4
        ]);
        DB::table('etudiants')->insert([
            'user_id'=>5
        ]);
        
	}
}