<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capabilities extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'button_text',
        'background_image'
    ];
}
