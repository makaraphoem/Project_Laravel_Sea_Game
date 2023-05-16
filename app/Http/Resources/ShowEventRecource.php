<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShowEventRecource extends JsonResource
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
            'description'=> $this->description,
            'location'=>$this->location,
            'start_date'=> $this->start_date,
            'end_date'=> $this->end_date,
            'created_by'=>$this->user,
            'ticket_in_event'=>TicketResource::collection($this->tickets),
            'match_teams'=>TeamResource::collection($this->teams)
        ];
    }
}
