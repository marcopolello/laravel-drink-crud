@extends('layouts.main-layout')

@section('section')

  <h1>setta il nuovo drink: </h1>
  <h1><a href="{{ route('drinks-index')}}">Indietro</a></h1>
  <form action="{{ route('drink-store')}}" method="post">
    @csrf
    @method('POST')
    <h1>ID: {{$drink -> id}}</h1>
    <label for="name">name: </label>
    <input type="text" name="name" value="">
    <br>
    <label for="price">price: </label>
    <input type="text" name="price" value="">
    <br>
    <label for="gradation">gradation: </label>
    <input type="text" name="gradation" value="">
    <br>
    <input type="submit" value="SALVA">

  </form>


@endsection
