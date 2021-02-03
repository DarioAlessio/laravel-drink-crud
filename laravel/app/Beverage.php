<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beverage extends Model
{
  protected $fillable = [
    'name',
    'gradation',
    'price',
  ];

  public function bottle()
    {
        return $this->belongsTo('App\Bottle');
    }
}
