<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;
    protected $fillable = ['name','dni','address','birth_date','phone1','phone2','health_insurance','numbre_health_insurance','history'];
}
