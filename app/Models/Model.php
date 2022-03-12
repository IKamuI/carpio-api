<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as LaravelModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Model
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Model newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model newQuery()
 * @method static \Illuminate\Database\Query\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model query()
 * @method static \Illuminate\Database\Query\Builder|Model withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Model withoutTrashed()
 * @mixin \Eloquent
 */
class Model extends LaravelModel
{
  use HasFactory;
  use SoftDeletes;
}
