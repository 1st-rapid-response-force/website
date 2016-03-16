<?php

namespace App\Models\File;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\Models\Access\User');
    }
}
