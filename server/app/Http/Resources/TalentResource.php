<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class TalentResource extends JsonResource
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
            'japaneseName' => $this->japanese_name,
            'nicknames' => $this->nicknames,
            'description' => $this->description,
            'greeting' => $this->greeting,
            'imagesUrl' => $this->images_url,
            'debutedAt' => $this->when($this->debuted_at, fn () => Carbon::parse($this->debuted_at)->format('d F Y')),
            'debutPlatform' => $this->debut_platform,
            'status' => $this->status,
            'age' => $this->age,
            'birthday' => $this->when($this->birthday, fn () => Carbon::parse($this->birthday)->format('d F')),
            'height' => $this->height,
            'oshiMark' => $this->oshi_mark,
        ];
    }
}
