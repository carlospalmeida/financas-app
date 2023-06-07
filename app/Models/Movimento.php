<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movimento extends Model
{
    use HasFactory;
    //relacionemento entre tabelas
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
