<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'nama', 'name', 'type', 'alamat' ,'telp', 'gambar',
    ];
}
