<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // overrides protected guarded because we are tracking requirements via the posts controller
    protected $guarded = [];
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
