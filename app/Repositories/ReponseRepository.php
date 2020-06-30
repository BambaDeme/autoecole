<?php

namespace App\Repositories;

use App\Reponse;
use Illuminate\Support\Facades\DB;


class ReponseRepository{
  protected $reponse;

  public function __construct(Reponse $reponse){
    $this->reponse = $reponse;
  }

  public function save($reponse,$idQuestion){
    $this->reponse->contenu = $reponse;
    $this->reponse->question_id = $idQuestion;
    $this->reponse->save();
  }

  public function getNbRreponses($idQuestion){
    $nb = DB::table("reponse")
              ->select(DB::raw('count(id) as nb'))
              ->where("question_id",$idQuestion)
              ->get();

    return $nb;
  }

  public function getReponses($idQuestion){
    $rep = DB::table("reponse")
              ->select('contenu')
              ->where("question_id",$idQuestion)
              ->get();

    return $rep;
  }
}
 ?>
