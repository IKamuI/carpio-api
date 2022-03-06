<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Models\Order;

class OrderController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $order = Order::paginate(10);
    return OrderResource::collection($order);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreOrderRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreOrderRequest $request)
  {
    $data = $request->validated();
    $order = Order::create($data);

    return OrderResource::make($order);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function show(Order $order)
  {
    return OrderResource::make($order);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateOrderRequest  $request
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateOrderRequest $request, Order $order)
  {
    $data = $request->validated();
    $order->update($data);

    return OrderResource::make($order);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Order  $order
   * @return \Illuminate\Http\Response
   */
  public function destroy(Order $order)
  {
    $order->delete();

    return response()->json([], 204);
  }
}
