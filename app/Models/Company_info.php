<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_info extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'id_company',
        'phone_contact',
        'description',
        'logo_src',
    ];

    protected $primaryKey = 'id_company';
}
