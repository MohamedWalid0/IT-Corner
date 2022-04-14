<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Assessment extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function patients(): BelongsToMany
    // {
    //     return $this->belongsToMany(Patient::class, 'assessment_patients')
    //         ->withTimestamps();
    // }

    public function appointments() : BelongsToMany
    {
        return $this->belongsToMany(Appointment::class , 'appointment_assessments')->withTimestamps();
    }

}
