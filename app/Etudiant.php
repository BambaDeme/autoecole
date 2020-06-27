<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    protected $fillable = ['prenom','nom','adresse','telephone','img'];
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
