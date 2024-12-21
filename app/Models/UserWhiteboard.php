<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserWhiteboard extends Model
{
    use SoftDeletes;

    public function whiteboard()
    {
        return $this->belongsTo(Whiteboard::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
