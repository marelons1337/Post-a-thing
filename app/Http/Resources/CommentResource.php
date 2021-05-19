<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
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
            'id' => $this->id,
            'username' => $this->username,
            'comment' => $this->comment,
            'created_at' => $this->created_at,
            'urgency' => $this->urgency,
            'contact_methods' => $this->contact_methods
        ];
    }
}
