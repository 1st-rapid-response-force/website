<?php

namespace App\Models\Access\User;

use Illuminate\Database\Eloquent\Model;

class Steam extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
