<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'id_student',
        'surname',
        'patronymic',
        'course',
        'group',
        'description',
        'photo_src',
    ];
}
