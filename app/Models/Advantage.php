<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advantage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cart_id'
    ];

    public function cart()
    {
       return  $this->belongsTo(Cart::class);
    }
}
