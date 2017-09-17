<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table    =   'activities';

    protected $primaryKey   =   'activity_id';

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function user_target()
    {
        return $this->belongsTo(User::class, 'user_target_id', 'id');
    }
}
