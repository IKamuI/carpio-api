<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Models\Category;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $category = Category::with('products')->get();
    return  CategoryResource::collection($category);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \App\Http\Requests\StoreCategoryRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreCategoryRequest $request)
  {
    $category = Category::create($request->validated());

    return CategoryResource::make($category);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category)
  {
    return CategoryResource::make($category);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateCategoryRequest  $request
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateCategoryRequest $request, Category $category)
  {
    $category->update($request->validated());
    return CategoryResource::make($category);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Category  $category
   * @return \Illuminate\Http\Response
   */
  public function destroy(Category $category)
  {
    $category->delete();
    return response()->json([], 204);
  }
}
