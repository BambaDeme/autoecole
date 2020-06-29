@extends("faq.template")

@section("contenu")
<div class="container">
  {!! Form::open(["url" => "faq"]) !!}
    {!! Form::label("question","Posez votre question : ") !!}
    <div class="form-group {!! $errors->has('question') ? 'has-error' : '' !!}">
      {!! Form::textarea("question","",["class"=>"form-control","placeholder"=>"Question ..."]) !!}
      {!! $errors->first("question","<small class='help-block'>:message</small>") !!}
    </div>
      {!! Form::submit("envoyer",["class"=>"btn btn-primary"]) !!}
  {!! Form::close() !!}
  <br><br>

  @php
  $i = 0;
  @endphp

  @foreach ($questions as $question)
    <div class="jumbotron">
        <h3>{!! $question->contenu !!}</h3>
        @php
        $input = $nbRep[$i]->first()->nb." Réponses";
        @endphp
        {!! link_to_route("show",$input,[$question->id],["class"=>"btn btn-primary"]) !!}
    </div>
    @php
    $i++;
    @endphp
  @endforeach
  <br><br>
  {!! $liens !!}
</div>
@endsection
