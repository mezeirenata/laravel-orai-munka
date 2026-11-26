<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    /** @use HasFactory<\Database\Factories\TrainingFactory> */
    use HasFactory;
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'trainer',
        'starts_at',
        'duration',
        'price',
        'free_spots'
    ];

    public function registrations(){
        return $this->hasMany(Registration::class);
    }
=======
>>>>>>> 6f8773037771282fb169d7a9593c6a72dcd777ab
}
