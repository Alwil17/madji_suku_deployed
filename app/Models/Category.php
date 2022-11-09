<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        "libelle",
        "slug"
    ];

    public $timestamps = false;

    public function establishments(){
        return $this->belongsToMany(Establishment::class, 'category_establishments');
    }
}
