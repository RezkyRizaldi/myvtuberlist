<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'channel_id' => $this->id,
            'title' => $this->whenNotNull($this->title),
            'description' => $this->whenNotNull($this->description),
            'published_at' => $this->when($this->published_at, fn () => Carbon::parse($this->published_at)->format('d F Y')),
            'thumbnail_url' => $this->whenNotNull($this->thumbnail_url),
            // 'country' => $this->whenNotNull($this->country),
            'view_count' => $this->when($this->view_count, fn () => number_format($this->view_count, 0, '.', ',')),
            'subscriber_count' => $this->whenNotNull($this->subscriber_count),
            // 'hidden_subscriber_count' => $this->whenNotNull($this->hidden_subscriber_count),
            'video_count' => $this->whenNotNull($this->video_count),
        ];
    }
}
