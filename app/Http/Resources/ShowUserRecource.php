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
            'password'=> $this->password,
            'created_event'=>$this->events,
            'created_ticket'=>$this->tickets,
            'created_team'=>$this->teams
        ];
    }
}
