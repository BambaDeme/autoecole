<?php

namespace App\Repositories;

use App\Question;
use Illuminate\Support\Facades\DB;

class QuestionRepository implements QuestionRepositoryInterface {
  protected $question;

  public function __construct(Question $question){
    $this->question = $question;
  }

  public function save($question){
     $this->question->contenu = $question;
     $this->question->save();
  }

  public function getPaginate($n){
    return $this->question->paginate($n);
  }

  public function getById($id){
    return $this->question->FindOrFail($id);
  }

  public function findIdAll(){
    return DB::table("question")
                ->get();
  }

}



?>
