<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory;

    protected $fillables = 
    [
        'name'
    ];

    public function houseSection()
    {
        return $this->hasMany(HouseSections::class,'class_id');
    }
}
