<?php

namespace App\Models;


class Order extends Model
{
  protected $fillable = ['user_id', 'status', 'order_name'];
}
