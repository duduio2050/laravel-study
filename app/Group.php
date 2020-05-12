<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class group extends Model
{
    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'members');
    }
}
