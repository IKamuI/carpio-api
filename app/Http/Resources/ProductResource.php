<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
      'category_id' => $this->category_id,
      'full_name'   => $this->full_name,
      'short_name'  => $this->short_name,
      'description' => $this->description,
      'prince'      => $this->price,
      'category' => CategoryResource::make($this->whenLoaded('category')),
      'photos' => PhotoResource::collection($this->whenLoaded('photos'))
    ];
  }
}
