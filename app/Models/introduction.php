<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class introduction extends Model
{
    use HasFactory;

     protected $fillable = [
        '_token',
        'heading',
        'description',
        'icon',
        'link'
    ];
}
