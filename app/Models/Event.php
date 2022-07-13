<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'event_name', 
        'event_start', 
        'event_end', 
        'event_description'
    ];

    public function bookings()
    {
        return $this->belongsToMany(Event::class);
    }
}
