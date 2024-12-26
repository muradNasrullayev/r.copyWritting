<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable=[
        'plan_name'
    ];

    public function cart()
    {
       return $this->hasMany(Cart::class);
    }

    public function advantage()
    {
        return $this->hasManyThrough(Advantage::class, Cart::class);
    }
}
