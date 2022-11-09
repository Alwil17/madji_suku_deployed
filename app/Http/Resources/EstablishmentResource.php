<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EstablishmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            "nom" => $this->nom,
            "slug" => $this->slug,
            "description_courte" => $this->description_courte,
            "description_longue" => $this->description_longue,
            "image" => $this->image,
            "banner" => $this->banner,
            "active" => $this->active,
            "address_principale" => $this->address_principale,
            "addresses" => AddressResource::collection($this->addresses),
            "website" => $this->website,
            "facebook" => $this->facebook,
            "whatsapp" => $this->whatsapp,
            "twitter" => $this->twitter,
            "instagram" => $this->instagram,
            "user" => $this->whenLoaded("user"),
        ];
    }
}
