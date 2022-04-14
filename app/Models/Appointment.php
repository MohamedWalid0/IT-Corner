<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Appointment extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }


    public function visit_type(): BelongsTo
    {
        return $this->belongsTo(VisitType::class);
    }


    public function assessments() : BelongsToMany
    {
        return $this->belongsToMany(Assessment::class , 'appointment_assessments')->withTimestamps();
    }

    public function bill(): HasOne
    {
        return $this->hasOne(bill::class);
    }


    public function day(): BelongsTo
    {
        return $this->belongsTo(Day::class);
    }


}
