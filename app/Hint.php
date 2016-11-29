<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hint extends Model
{
  // fillable allows you to specify which values can be mass assigned to a db record via an array.
  protected $fillable = ['body'];
  public function card() {
    return $this->belongsTo(Card::class);
  }
}
