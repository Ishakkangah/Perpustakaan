<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_kelamin extends Model
{
    use HasFactory;

    public function members()
    {
        return $this->hasMany(member::class);
    }
}
