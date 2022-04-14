<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function procedures() : BelongsToMany
    {
        return $this->belongsToMany(Procedure::class , 'patient_procedures')->withTimestamps();
    }

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function bill(): HasOne
    {
        return $this->hasOne(Bill::class);
    }


}
