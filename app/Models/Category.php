<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        "ctg_code",
        "ctg_names"
    ];

    public function products()
    {
        return $this->hasMany(Products::class, "prd_code", "ctg_code");
    }
}
