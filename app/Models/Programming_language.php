<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programming_language extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_language';
    protected $fillable = [
        'id_language',
        'level',
    ];
}
