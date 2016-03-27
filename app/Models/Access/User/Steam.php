<?php

namespace App\Models\Access\User;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Steam
 * @package App\Models\Access\User
 */
class Steam extends Model
{
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }
}
