<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function options()
    {
        return $this->hasMany('App\Option');
    }

    public function votes()
    {
        return $this->hasMany('App\Vote');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    protected $statuses = array(
        '0' => 'not active',
        '1' => 'active'
    );

    public function getStatusAttribute($value)
    {
        return $this->statuses[$value];
    }
}
