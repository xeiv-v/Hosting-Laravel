<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    protected $table = 'produk';
    protected $fillable=[
        'nama',
        'qty',
        'harga'
    
    
    
    ];
}
