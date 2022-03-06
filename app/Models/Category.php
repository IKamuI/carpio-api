<?php

namespace App\Models;


class Category extends Model
{
  protected $fillable = ['name'];

  public function products()
  {
    return $this->hasMany(Product::class);
  }
}
