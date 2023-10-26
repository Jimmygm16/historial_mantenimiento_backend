<?php

namespace App\Http\Resources\api\v1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ComputerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'computer_code' => $this->id,
            'ubication' => $this->name,
            'computer_brand' => $this->brand,
            'ram_memory' => $this->ram,
            'processor' => $this->cpu,
            'computer_owner' => $this->owner,
            'creation_date' => $this->updated_at,
        ];
    }
}
