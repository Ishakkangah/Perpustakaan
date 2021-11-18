<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jenis_kelamin()
    {
        return $this->belongsTo(jenis_kelamin::class);
    }

    public function kelas()
    {
        return $this->belongsTo(kelas::class);
    }
}
