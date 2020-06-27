<?php
namespace App\Repositories;
use App\User;
use App\Etudiant;
class EtudiantRepository{
	protected $user;
	protected $profile;

	public function __construct(User $user,Etudiant $profile){
		$this->user = $user;
		$this->profile = $profile;
	}

	public function getPaginate($n){
		return $this->profile->paginate($n);
	} 
	public function profile($id){
		return $this->profile->findOrFail($id);
	}
	public function update(Array $inputs,$id){
		$this->profile->findOrFail($id)->update($inputs);
	}
}