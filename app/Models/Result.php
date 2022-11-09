<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;

    protected $fillable = [
        "classe",
        "inscrits",
        "admis",
        "annee_debut",
        "annee_fin",
        "establishment_id",
        "exam_id",
    ];

    public $timestamps = false;

    public function establishment(){
        return $this->belongsTo(Establishment::class);
    }

    public function exam(){
        return $this->belongsTo(Exam::class);
    }
}
