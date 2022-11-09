<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            "libelle" => $this->libelle,
            "bp" => $this->bp,
            "postal" => $this->postal,
            "ville" => $this->ville,
            "quartier" => $this->quartier,
            "pays" => $this->pays,
            "email" => $this->email,
            "tel1" => $this->tel1,
            "tel2" => $this->tel2,
            "tel3" => $this->tel3,
            "address" => $this->address,
            "addressbis" => $this->addressbis,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude,
            "establishment_id" => $this->establishment_id,
        ];
    }
}
