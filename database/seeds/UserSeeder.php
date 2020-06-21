<?php
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder{
    private function randDate(){
        return Carbon::createFromDate(null,rand(1,12),rand(1,28));
    }
    public function run(){
        DB::table('users')->delete();
        $date = $this->randDate();
        DB::table('users')->insert([
            'prenom'=>'Bamba',
            'nom'=>'DEME',
            'adresse'=>'Parcelles',
            'telephone'=>'777442511',
            'email'=>'cheikhbambademe@gmail.com',
            'password'=>bcrypt('bamba'),
            'role_id'=>rand(1,3),
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        
        $date = $this->randDate();
        DB::table('users')->insert([
            'prenom'=>'Sourah',
            'nom'=>'Diene',
            'adresse'=>'Parcelles',
            'telephone'=>'777442511',
            'email'=>'sourah@gmail.com',
            'password'=>bcrypt('sourah'),
            'role_id'=>rand(1,3),
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'prenom'=>'Mandaw',
            'nom'=>'Diop',
            'adresse'=>'Parcelles',
            'telephone'=>'777442511',
            'email'=>'mandaw@gmail.com',
            'password'=>bcrypt('mandaw'),
            'role_id'=>rand(1,3),
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'prenom'=>'Diana',
            'nom'=>'Diabong',
            'adresse'=>'Parcelles',
            'telephone'=>'777442511',
            'email'=>'diana@gmail.com',
            'password'=>bcrypt('diana'),
            'role_id'=>rand(1,3),
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'prenom'=>'Aline',
            'nom'=>'Mbaye',
            'adresse'=>'Parcelles',
            'telephone'=>'777442511',
            'email'=>'alinembaye@gmail.com',
            'password'=>bcrypt('aline'),
            'role_id'=>rand(1,3),
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
    }
}