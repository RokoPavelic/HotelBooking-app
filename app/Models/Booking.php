<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    public function events()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function contactsInfo()
    {
        return $this->belongsToMany(Contact::class);
    }
}
