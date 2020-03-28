<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $protected =[];

    public function daftar()
    {
        return $this->belongsTo(Daftar::class);
    }
}
