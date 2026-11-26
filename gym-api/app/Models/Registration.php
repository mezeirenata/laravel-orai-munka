<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['member_name', 'email', 'persons','created_at','updated_at','training_id'])]


class Registration extends Model
{
    /** @use HasFactory<\Database\Factories\RegistrationFactory> */
    use HasFactory;

    public function training(): BelongsTo
    {
        return $this->belongsTo(Training::class);
    }
}
