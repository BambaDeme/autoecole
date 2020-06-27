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
            'username'=>'bambademe',
            'email'=>'cheikhbambademe@gmail.com',
            'password'=>bcrypt('bamba'),
            //'role_id'=>rand(1,3),
            'role_id'=>2,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        
        $date = $this->randDate();
        DB::table('users')->insert([
            'username'=>'sourah',
            'email'=>'sourah@gmail.com',
            'password'=>bcrypt('sourah'),
            'role_id'=>3,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'username'=>'mandaw17',
            'email'=>'mandaw@gmail.com',
            'password'=>bcrypt('mandaw'),
            'role_id'=>1,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'username'=>'aidadiallo',
            'email'=>'diana@gmail.com',
            'password'=>bcrypt('diana'),
            'role_id'=>3,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
        $date = $this->randDate();
        DB::table('users')->insert([
            'username'=>'aline',
            'email'=>'alinembaye@gmail.com',
            'password'=>bcrypt('aline'),
            'role_id'=>3,
            'created_at'=>$date,
            'updated_at'=>$date
        ]);
    }
}