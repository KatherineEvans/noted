<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    /** RELATIONSHIPS */
    public function jobApplication()
    {
        return $this->belongsTo(JobApplication::class);
    }

    public function contacts(): MorphMany
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
}
