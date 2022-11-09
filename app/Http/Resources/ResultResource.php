<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultResource extends JsonResource
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
            "classe" => $this->classe,
            "inscrits" => $this->inscrits,
            "admis" => $this->admis,
            "annee_debut" => $this->annee_debut,
            "annee_fin" => $this->annee_fin,
            "establishment" => $this->establishment()->get()->map->only(['id', 'nom', 'slug', 'description_courte', 'active']),
            "exam" => $this->exam,
        ];
    }
}
