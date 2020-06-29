<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FaqRequest;
use App\Repositories\QuestionRepository;
use App\Repositories\ReponseRepository;

class FaqController extends Controller
{
    protected $questionRep;

    protected $reponseRep;

    protected $nbParPage = 3;

    public function __construct(QuestionRepository $questionRep,ReponseRepository $reponseRep){
        $this->questionRep = $questionRep;
        $this->reponseRep = $reponseRep;
    }

    public function getQuestion(){
      $questions = $this->questionRep->getPaginate($this->nbParPage);
      $liens = $questions->render();

      $ids = $this->questionRep->findIdAll();

      $i=0;
      $nbRep = array();

      foreach($ids as $id){
        $nbRep[$i] = $this->reponseRep->getNbRreponses($id->id);
        $i++;
      }

      return view("faq.faqView",compact("questions","liens","nbRep"));
    }

    public function postQuestion(Request $request){
      $this->questionRep->save($request->input("question"));

      return redirect("faq");
    }

    public function show($id){
      $quest = $this->questionRep->getById($id);

      $rep = $this->reponseRep->getReponses($id);

      return view("faq.show",compact("quest","rep"));
    }

    public function postReponse(Request $request){
      $this->reponseRep->save($request->input("reponse"),$request->input("question_id"));

      return redirect("faq");
    }
}
