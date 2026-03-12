<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DonationMethodResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'tagline' => $this->tagline,
            'initials' => $this->initials,
            'color' => $this->color,
            'field' => $this->field,
            'value' => $this->value,
            'copy_value' => $this->copy_value,
            'note' => $this->note,
            'is_active' => $this->is_active,
            'iban_details' => DonationIbanDetailResource::collection($this->whenLoaded('ibanDetails')),
            'steps' => DonationMethodStepResource::collection($this->whenLoaded('steps')),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
