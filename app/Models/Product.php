<?php

namespace App\Models;


class Product extends Model
{
  protected $fillable = ['category_id', 'full_name', 'short_name', 'description', 'price'];

  public function photos()
  {
    return $this->morphMany(Photo::class, 'phototable');
  }


  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
