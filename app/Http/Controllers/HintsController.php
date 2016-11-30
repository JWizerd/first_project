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
    // $hint = new Hint(['body' => $request->body]);
    // $card->hints()->save($hint);
    // return back();

    // OR use eloquents built relational methods for creating hints relating to a specific card. the hints() method instantiates a new hint use HasMany eloquent method. 

    $card->hints()->create(['body' => $request->body]);
    return back();
  }
}
