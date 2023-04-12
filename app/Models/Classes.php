<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_name',
        'class_num',
        'class_sec',
        'class_prof',
        'class_subj',
    ];

  



}
