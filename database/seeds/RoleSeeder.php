<?php
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder{
    public function run(){
        DB::table('roles')->delete();
        DB::table('roles')->insert([
            'title'=>'administrateur'
        ]);
        DB::table('roles')->insert([
            'title'=>'encadrant'
        ]);
        DB::table('roles')->insert([
            'title'=>'etudiant'
        ]);
    }
}