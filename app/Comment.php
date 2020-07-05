<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public function poll()
    {
        return $this->belongsTo('App\Poll');
    }
}
