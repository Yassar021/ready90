<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'nama', 'name', 'type', 'deskripsi', 'desc', 'gambar',
    ];
}
