<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $guarded = [];

    public function rombels()
    {
        return $this->hasMany(Rombel::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'kaprog_id');
    }
}
