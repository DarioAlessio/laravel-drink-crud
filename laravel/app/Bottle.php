<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bottle extends Model//one
{
  protected $fillable = [
    'name',
    'color',

  ];

  public function beverages(){//many
       return $this->hasMany('App\Beverage');//model es.beverage/ riferimento in questione
  }
}
