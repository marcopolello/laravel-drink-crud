<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class MainController extends Controller
{
  public function index() {
    $drinks = Drink::all();
    return view('pages.drinks', compact('drinks'));
  }
  public function show($id) {
    $drink = Drink::findOrFail($id);
    return view('pages.drink', compact('drink'));
  }
}
