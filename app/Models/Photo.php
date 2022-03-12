<?php

namespace App\Models;


/**
 * App\Models\Photo
 *
 * @property int $id
 * @property int $phototable_id
 * @property string $phototable_type
 * @property string $url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $phototable
 * @method static \Database\Factories\PhotoFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo newQuery()
 * @method static \Illuminate\Database\Query\Builder|Photo onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo query()
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo wherePhototableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo wherePhototableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Photo whereUrl($value)
 * @method static \Illuminate\Database\Query\Builder|Photo withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Photo withoutTrashed()
 * @mixin \Eloquent
 */
class Photo extends Model
{
  protected $fillable = ['url'];


  public function phototable()
  {
    return $this->morphTo();
  }
}
