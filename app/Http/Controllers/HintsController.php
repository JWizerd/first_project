<?php

namespace App\Http\Controllers;

use App\Hint;
use App\Card;

use Illuminate\Http\Request;

class HintsController extends Controller
{
  public function store(Request $request, Card $card) {
    $hint = new Hint;
    $hint->body = $request->body;
    $card->hints()->save($hint);
    return back();
  }
}
