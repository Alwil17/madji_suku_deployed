<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        "libelle",
        "slug"
    ];

    public $timestamps = false;

    public function results(){
        return $this->hasMany(Result::class);
    }
}
