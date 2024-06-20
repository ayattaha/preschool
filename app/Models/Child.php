<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Child extends Model
{
    use HasFactory;
    protected $fillable=[
    'childName', 
    'birthdate', 
    'parentphone',
    'parentemail',
    'address', 
    'active',
    'image'
    ];
}
