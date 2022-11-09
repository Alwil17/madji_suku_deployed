<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Establishment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        "nom",
        "slug",
        "description_courte",
        "description_longue",
        "image",
        "banner",
        "active",
        "address_principale",
        "website",
        "facebook",
        "whatsapp",
        "twitter",
        "instagram",
        "user_id",
    ];

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function results(){
        return $this->hasMany(Result::class);
    }

    public function services(){
        return $this->belongsToMany(Service::class, 'service_establishments')->withPivot("description", "image1", "image2", "image3");
    }

    public function categories(){
        return $this->belongsToMany(Category::class, 'category_establishments');
    }
}
