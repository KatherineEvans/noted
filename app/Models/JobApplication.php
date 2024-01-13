<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Model;
use App\Enums\ApplicationStatus;

class JobApplication extends Model
{
    use HasFactory;

    public function getStatusAsEnum(): ApplicationStatus
    {
        return ApplicationStatus::from($this->status);
    }
    
    /** RELATIONSHIPS */ 
    public function interviews()
    {
        return $this->hasMany(Interview::class);
    }

    public function contacts(): MorphMany
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
}
