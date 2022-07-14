<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'date',
        'date_in',
        'date_out', 
    ];

    public function event()
    {
        return $this->hasOne(Event::class);
    }

    public function contactsInfo()
    {
        return $this->belongsToMany(Contact::class);
    }
}
