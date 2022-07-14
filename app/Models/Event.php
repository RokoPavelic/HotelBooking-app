<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'booking_id',
        'event_name', 
        'event_date',
        'event_start', 
        'event_end', 
        'event_description',
    ];

    public function bookings()
    {
        return $this->belongsTo(Booking::class);
    }

    public function contact_info()
    {
        return $this->belongsTo(ContactInfo::class);
    }
}
