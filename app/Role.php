<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=[

        'key','value'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
