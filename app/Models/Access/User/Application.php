<?php

namespace App\Models\Access\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Application
 * @package App\Models\Access\User
 */
class Application extends Model
{
    use SoftDeletes;
    /**
     * The attributes that are not mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['dob','created_at', 'updated_at', 'deleted_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Access\User\User');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeActive($query)
    {
        return $query->where('status', 'Under Review');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeDeclined($query)
    {
        return $query->where('status', 'Declined');
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeAccepted($query)
    {
        return $query->where('status', 'Accepted');
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->last_name.'.'.$this->first_name[0];
    }
}
