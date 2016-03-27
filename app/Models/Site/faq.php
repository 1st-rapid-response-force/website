<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Model;

/**
 * Class faq
 * @package App\Models\Site
 */
class faq extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @param $query
     * @return mixed
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeNotPublished($query)
    {
        return $query->where('published', 0);
    }
}
