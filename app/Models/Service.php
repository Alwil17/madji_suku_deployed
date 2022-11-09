<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        "libelle",
        "slug"
    ];

    public $timestamps = false;

    public function establishments(){
        return $this->belongsToMany(Establishment::class, 'service_establishments')->withPivot("description", "image1", "image2", "image3");
    }
}
