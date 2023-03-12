<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student_info extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_student';
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

    public function getLanguages(): HasMany
    {
        return $this->hasMany(Student_language::class,'id_student');
    }
}
