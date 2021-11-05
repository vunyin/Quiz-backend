<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
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
            'author_id' => $this->author_id,
            'title' => $this->title,
            'body' => $this->body,
            'created_at' => $this->created_at->format('D, j M Y  h:i A'), // This formart call Carbon
            'updated_at' => $this->updated_at->format('D, j M Y  h:i A'), // This formart call Carbon
        ];
    }
}
