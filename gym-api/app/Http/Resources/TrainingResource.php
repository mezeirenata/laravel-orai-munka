<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TrainingResource extends JsonResource
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
            'name' => $this->name,
            'trainer' => $this->trainer,
            'starts_at' => $this->starts_at,
            'duration' => $this->duration,
            'price' => $this->price,
            'free_spots' => $this->free_spots,
            'full' => (int) $this->free_spots === 0,
            'registrations_count' => $this->registrations_count ?? 0
        ];

        Route::get('/trainings', [TrainingController::class], index);
    }
}
