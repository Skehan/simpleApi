<?php

namespace App\Model;

use App\Model\Review;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


  protected $fillable = [
    'name','discount','price','stock','detail'
  ];

    public function reviews(){
      return $this->hasMany(Review::class);
    }
}
