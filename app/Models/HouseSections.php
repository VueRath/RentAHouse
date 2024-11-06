<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HouseSections extends Model
{
    /** @use HasFactory<\Database\Factories\HouseSectionsFactory> */
    use HasFactory;

    protected $fillable = 
    [
        'class_id',
        'name'
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
