<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CilentResource extends JsonResource
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
            'Mijoz_ismi' => $this->client_name,
            'Ish_joyi' => $this->workplace,
            'Mijoz_ish_xaqi' => $this->client_salary,
            'Yoshi' => $this->age,
            'Jinsi' => $this->gender,
            'active' => $this->active,
            'Yaratilgan_sana' => $this->created_at->format('Y-m-d H:i:s'),
            'Ozgartirilgan_sana' => $this->created_at->format('Y-m-d H:i:s'),
        ];
    }
}
