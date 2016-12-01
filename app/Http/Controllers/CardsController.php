<?php

namespace App\Http\Controllers;

use App\Card;
use DB;
use Illuminate\Http\Request;

class CardsController extends Controller
{
  public function index() {
    $cards = Card::all();
    return view('cards.index', compact('cards'));
  }

  public function show(Card $card) {
    // load() stands for Eager Loading which is very important for getting data without invoking many database queries. N + 1 issue is solved by using Laravel's built in load function.
    $card->load('hints.user');
    return view('cards.show', compact('card'));
  }
}
