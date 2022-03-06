<?php

namespace App\Models;


class Photo extends Model
{
  protected $fillable = ['url'];


  public function phototable()
  {
    return $this->morphTo();
  }
}
