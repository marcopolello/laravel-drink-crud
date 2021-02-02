@extends('layouts.main-layout')

@section('section')

  <h1>se proprio vuoi modificare il drink eccoti servito: </h1>
  <h1><a href="{{ route('drinks-index')}}">Indietro</a></h1>
  <form action="{{ route('drink-update', $drink -> id)}}" method="post">
    @csrf
    @method('POST')
    <h1>ID: {{$drink -> id}}</h1>
    <label for="name">name: </label>
    <input type="text" name="name" value="{{$drink -> name}}">
    <br>
    <label for="price">price: </label>
    <input type="text" name="price" value="{{$drink -> price}}">
    <br>
    <label for="gradation">gradation: </label>
    <input type="text" name="gradation" value="{{$drink -> gradation}}">
    <br>
    <input type="submit" value="SALVA MODIFICHE">

  </form>


@endsection
