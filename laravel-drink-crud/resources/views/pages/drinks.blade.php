@extends('layouts.main-layout')

@section('section')

  <h1>Vorrei comparisse un elenco di drink in cinese per Magia:</h1>
  <h1><a style="color:white;" href="{{ route('drink-create')  }}">Crea nuovo drink</a></h1>

  @foreach ($drinks as $drink)
    <div class="drink">
      <a href="{{ route('drink-show', $drink -> id) }}"><h2 class="nome">Nome drink:<br> {{$drink -> name}}</h2></a>
      <h2>Prezzo: {{$drink -> price}} €</h2>
      <h2>Gradi: {{$drink -> gradation}} % alc/vol</h2>
      <span><a href="{{ route('drink-edit', $drink -> id) }}">MODIFICA</a></span>
      <span><a href="{{ route('drink-delete', $drink -> id) }}">CANCELLA</a></span>
    </div>
  @endforeach

@endsection
