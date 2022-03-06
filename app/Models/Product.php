<?php

namespace App\Models;


class Product extends Model
{
  protected $fillable = ['category_id', 'full_name', 'short_name', 'description', 'price'];
}
