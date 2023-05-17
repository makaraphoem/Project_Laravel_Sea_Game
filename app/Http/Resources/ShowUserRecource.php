<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowUserRecource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name'=> $this->name,
            'email'=> $this->email,
            'phone_number'=>$this->phone_number,
            'created_event'=>EventResource::collection($this->events),
            'created_ticket'=>TicketResource::collection($this->tickets),
            'created_team'=>TeamResource::collection($this->teams) 
        ];
    }
}
