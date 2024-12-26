<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable=[
        'icon',
        'title',
        'amount',
        'sub_title',
        'plan_id'
    ];

    public function plan()
    {
       return $this->belongsTo(Plan::class);
    }

    public function advantage()
    {
       return $this->hasMany(Advantage::class);
    }
}
