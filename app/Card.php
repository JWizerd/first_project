<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

  public function hints()
  {
    return $this->hasMany(Hint::class);
  }

  public function addHint(Hint $hint)
  {
    return $this->hints()->save($hint);
  }

}
