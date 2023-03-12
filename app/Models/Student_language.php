<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student_language extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_student',
        'id_language'
    ];

    public function students()
    {
        return $this->belongsTo(Student_info::class,'id_student','id_student');
    }

    public function getLanguage()
    {
        return $this->belongsTo(Programming_language::class,'id_language');
    }

}
