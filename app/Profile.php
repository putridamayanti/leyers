<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table    =   'profiles';

    protected $primaryKey   =   'profile_id';

    public function user()
    {
        $this->belongsTo(User::class, 'profile_id', 'id');
    }
}
