<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class VisitType extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $table = 'visit_types' ;

    public function appointments(): HasMany
    {
        return $this->hasMany(Appointment::class);
    }

}
