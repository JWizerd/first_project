<?php

namespace App\Http\Controllers;

use App\Hint;
use App\Card;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

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

      // $card->hints()->create(['body' => $request->body]);
      // return back();

    // Even Further, use the all() method on the request to get all data from the post request. Make sure that you have $fillable set for data input to eliminate any malicious attempts.

      // $card->hints()->create($request->all());
      // return back();

    // lastly, and bestly, you could create a method in your model that abstracts the logic since your dealing primarily with data here the model should control this logic anyways. Method created in Card.php is addHint();

    $card->addHint( new Hint($request->all()) );
    return back(); // back redirects you back to the request page
  }

  public function edit(Hint $hint) {
    return view('hints.edit', compact('hint'));
  }

  public function update(Request $request, Hint $hint) {
    $hint->update($request->all());
    return redirect('cards/' . $hint->card_id);
  }
}
