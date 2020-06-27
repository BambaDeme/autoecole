<?php
use Illuminate\Database\Seeder;

class EncadrantSeeder extends Seeder{
	public function run(){
		DB::table('encadrants')->delete();

        DB::table('encadrants')->insert([
            'user_id'=>2
        ]);
        
	}
}