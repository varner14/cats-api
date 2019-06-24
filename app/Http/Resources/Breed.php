<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Breed extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'cat_id '=> $this->cat_id,
            'name' => $this->name,
            'temperament'=> $this->temperament,
            'life_span'=> $this->life_span,
            'alt_names' => $this->alt_names,
            'wikipedia_url'=> $this->wikipedia_url,
            'origin' => $this->origin,
            'experimental'=> $this->experimental,
            'hairless' => $this->hairless,
            'natural' => $this->natural,
            'rare' => $this->rare,
            'rex' => $this->rare,
            'supress_tail'=>$this->supress_tail,
            'short_legs' => $this->short_legs,
            'hypoallergenic'=> $this->hypoallergenic,
            'adaptability' => $this->adaptability,
            'affection_level' => $this->affection_level,
            'country_code' => $this->country_code,
            'child_friendly' => $this->child_friendly,
            'dog_friendly' => $this->dog_friendly,
            'energy_level'=> $this->energy_level,
            'grooming' => $this->grooming,
            'health_issues' => $this->health_issues ,
            'intelligence' =>$this->intelligence,
            'shedding_level' => $this->shedding_level,
            'social_needs' => $this->social_needs,
            'stranger_friendly' => $this->stranger_friendly,
            'vocalisation'=> $this->vocalisation
        ];
    }
}
