<?php

namespace App\Models;


class OrderItem extends Model
{
  protected $fillable = ['order_id', 'product_id', 'product_name', 'price'];
}
