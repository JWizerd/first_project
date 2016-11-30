<?php

namespace App\Http\Controllers;

use App\Hint;
use App\Card;

use Illuminate\Http\Request;

class HintsController extends Controller
{
  public function store(Request $request, Card $card) {
    // Long Hand Method for Creating new Hints
    // $hint = new Hint;
    // $hint->body = $request->body;
    // $card->hints()->save($hint);
    // return back();


    // Short Hand Method for Creating new Hints
    $hint = new Hint(['body' => $request->body]);
    $card->hints()->save($hint);
    return back();
  }
}
