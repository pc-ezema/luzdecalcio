<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invention extends Model
{
    use HasFactory;

    protected $fillable = [
        'category', 
        'groupleadername', 
        'fullname', 
        'groupnumber', 
        'email', 
        'phone', 
        'age', 
        'level', 
        'citystate', 
        'country',
        'projectname', 
        'difference', 
        'importance', 
        'patent', 
        'registered', 
        'workingdetails', 
        'cost', 
        'file', 
        'file2', 
        'file3',
        'file4'
    ];
}
