<?php
namespace App\Repositories;
use App\User;
use App\Encadrant;
class EncadrantRepository{
	protected $user;
	protected $profile;

	public function __construct(User $user,Encadrant $profile){
		$this->user = $user;
		$this->profile = $profile;
	}

	public function profile($id){
		return $this->profile->findOrFail($id);
	}
	public function update(Array $inputs,$id){
		$this->profile->findOrFail($id)->update($inputs);
	}
}