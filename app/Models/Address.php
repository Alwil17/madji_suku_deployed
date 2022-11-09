<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "libelle",
        "bp",
        "postal",
        "ville",
        "quartier",
        "pays",
        "email",
        "tel1",
        "tel2",
        "tel3",
        "address",
        "addressbis",
        "latitude",
        "longitude",
        "establishment_id",
    ];

    public function user(){
        return $this->hasOne(User::class);
    }

    public function establishment(){
        return $this->belongsTo(Establishment::class);
    }
}
