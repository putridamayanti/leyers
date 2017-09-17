<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'colors';

    protected $primaryKey = 'color_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
