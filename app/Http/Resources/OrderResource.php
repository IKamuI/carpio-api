<?php

namespace App\Http\Resources;

use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
  public function toArray($request)
  {
    return [
      'id' => $this->id,
      'user_id' => $this->user_id,
      'products' => OrderItemResource::collection($this->whenLoaded('products')),
      'client' => UserResource::make($this->whenLoaded('client')),
      'status' => $this->status,
      'order_name' => $this->order_name
    ];
  }
}
