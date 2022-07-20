<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    
    protected $fillable = [
        'room_id',
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

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
