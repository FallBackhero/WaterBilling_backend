<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConsumersResource extends JsonResource
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
            'user_key' => (string)$this->user_key, 
            'attributes' => [
                'firstname' => $this->firstname,
                'lastname' => $this->lastname,
                'barangay' => $this->barangay,
                'purok' => $this->purok
                ]
            ];
    }
}
