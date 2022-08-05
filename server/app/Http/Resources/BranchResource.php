<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class BranchResource extends JsonResource
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
            'description' => $this->description,
            'launchedAt' => $this->when($this->launched_at, fn () => Carbon::parse($this->launched_at)->format('d F Y')),
            'logoUrl' => $this->logo_url,
            'generations' => GenerationResource::collection($this->whenLoaded('generations')),
        ];
    }
}
