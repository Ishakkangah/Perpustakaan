<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function buku()
    {
        return $this->belongsTo(buku::class);
    }

    public function member()
    {
        return $this->belongsTo(member::class);
    }

    public function status()
    {
        return $this->belongsTo(status::class);
    }


}
