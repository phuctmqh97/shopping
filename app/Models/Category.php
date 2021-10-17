<?php

namespace App\Models;

use App\components\Recusive;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "categories";
    protected $fillable = ['name', 'paren_id', 'slug'];  
}
