@extends("faq.template")

@section("contenu")
  <div class="container">
  <h3>Repondez à la question : </h3>
      <div class="jumbotron">
      {!! $quest->contenu !!}
    </div>
  <br><br>
  {!! Form::open(["url" => "saveRep"]) !!}
    <input type="hidden" name="question_id" value="{!! $quest->id !!}">
    <div class="form-group {!! $errors->has('question') ? 'has-error' : '' !!}">
      {!! Form::textarea("reponse","",["class"=>"form-control","placeholder"=>"Reponse ..."]) !!}
      {!! $errors->first("reponse","<small class='help-block'>:message</small>") !!}
    </div>
      {!! Form::submit("envoyer",["class"=>"btn btn-primary"]) !!}
  {!! Form::close() !!}

  @foreach ($rep as $rep)
    <div class="jumbotron">
        <h3>{!! $rep->contenu !!}</h3>
    </div>
  @endforeach
  </div>
@endsection
