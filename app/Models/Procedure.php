<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Procedure extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function patients() : BelongsToMany
    {
        return $this->belongsToMany(Procedure::class , 'patient_procedures')->withTimestamps();
    }


}
