<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingResource extends JsonResource
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
            "note" => $this->note,
            "titre" => $this->titre,
            "commentaire" => $this->commentaire,
            "user" => $this->user()->get()->map->only(['id', 'nom', 'prenoms', 'type', 'email']),
            "establishment" => $this->establishment()->get()->map->only(['id', 'nom', 'slug', 'description_courte', 'active']),
        ];
    }
}
