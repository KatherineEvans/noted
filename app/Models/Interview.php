<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;

    /**
     * Get all of the interview's contacts.
     */
    public function contacts()
    {
        return $this->morphMany(Contact::class, 'contactable');
    }
}
