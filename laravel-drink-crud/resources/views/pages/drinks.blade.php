@extends('layouts.main-layout')

@section('section')

  <h1>Vorrei comparisse un elenco di drink in cinese per Magia:</h1>

  @foreach ($drinks as $drink)
    <div class="drink">
      <a href="{{ route('drink-show', $drink -> id) }}"><h2 class="nome">Nome drink:<br> {{$drink -> name}}</h2></a>
      <h2>Prezzo: {{$drink -> price}} €</h2>
      <h2>Gradi: {{$drink -> gradation}} % alc/vol</h2>
    </div>
  @endforeach

@endsection
