<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'dni' => $this->dni,

            'id_reg' => [
                'description' => $this->region->description
            ],

            'id_com' => [
                'description' => $this->commune->description
            ],

            'email' => $this->email,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'address' => $this->address ? $this->address : null,
            'date_reg' => $this->date_reg,
            'status' => $this->status,
        ];
    }

}
