<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable=[
    'name','catid','unit','quantity','buy_price','sale_price','enable'
  ];
    public function product(){
      return $this->belongsTo(Product::class);
    }
}
