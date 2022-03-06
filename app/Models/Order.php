<?php

namespace App\Models;


class Order extends Model
{
  protected $fillable = ['user_id', 'status', 'order_name'];

  public function products()
  {
    return $this->hasMany(OrderItem::class);
  }

  public function client()
  {
    return $this->belongsTo(User::class, 'user_id');
  }
}
