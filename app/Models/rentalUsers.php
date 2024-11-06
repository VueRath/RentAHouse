<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rentalUsers extends Model
{
    /** @use HasFactory<\Database\Factories\RentalUsersFactory> */
    use HasFactory;

  protected $fillable = 
  [
    'house_section_id',
    'class_id',
    'name',
    'email'
  ];

}
