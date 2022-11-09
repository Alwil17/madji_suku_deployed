<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServiceEstablishment extends Pivot
{
    use HasFactory;

    protected $table = "service_establishments";

    protected $fillable = [
        "description",
        "image1",
        "image2",
        "image3",
        "service_id",
        "establishment_id",
    ];

    public $timestamps = false;
}
