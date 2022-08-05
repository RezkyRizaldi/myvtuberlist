<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GenerationResource extends JsonResource
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
            'name' => $this->whenNotNull($this->name),
            'knownAs' => $this->known_as,
            'description' => $this->description,
            'logoUrl' => $this->logo_url,
            'talents' => TalentResource::collection($this->whenLoaded('talents')),
        ];
    }
}
