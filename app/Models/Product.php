<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // if the table name is different
    // protected $table = 'Other Table Name';

    // Peremeters that can be filled in the table
    protected $fillable = [
        'name', 
        'slug', 
        'description', 
        'price',
    ];
}
