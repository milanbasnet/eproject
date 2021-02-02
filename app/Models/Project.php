<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    Protected $table='projects';
    protected $fillable=[
        'product', 'description', 'imageFile'
    ];
}
