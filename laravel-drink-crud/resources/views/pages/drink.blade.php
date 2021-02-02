@extends('layouts.main-layout')

@section('section')

  <h1>Hai selezionato questo drink non sapendo cosa sia:</h1>
  <h1>ID: {{$drink -> id}}</h1>
  <h2>Nome: {{$drink -> name}}</h2>
  <h2>Prezzo: {{$drink -> price}} €</h2>
  <h2>Grado Alcolico: {{$drink -> gradation}} % alc/vol</h2>
  <h1><a href="{{ route('drinks-index')}}">Indietro</a></h1>


@endsection
