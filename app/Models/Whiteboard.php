<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Whiteboard extends Model
{
    use SoftDeletes;

    public function users_whiteboards()
    {
        return $this->hasMany(UserWhiteboard::class);
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
