<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderItemRequest;
use App\Http\Requests\UpdateOrderItemRequest;
use App\Http\Resources\OrderItemResource;
use App\Http\Resources\OrderResource;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $ordersItems = OrderItem::paginate(10);
    return OrderItemResource::collection($ordersItems);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreOrderItemRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreOrderItemRequest $request)
  {
    $data = $request->validated();
    $orderItem = OrderItem::create($data);

    return OrderItemResource::make($orderItem);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\OrderItem  $orderItem
   * @return \Illuminate\Http\Response
   */
  public function show(OrderItem $item)
  {
    return OrderItemResource::make($item);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateOrderItemRequest  $request
   * @param  \App\Models\OrderItem  $orderItem
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateOrderItemRequest $request, OrderItem $item)
  {
    $data = $request->validated();
    $item->update($data);

    return OrderItemResource::make($item);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\OrderItem  $orderItem
   * @return \Illuminate\Http\Response
   */
  public function destroy(OrderItem $item)
  {
    $item->delete();

    return response()->json([], 204);
  }
}
