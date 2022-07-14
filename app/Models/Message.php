<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    protected $fillable = [
        'subject', 
        'message',
    ];

    public function contactInfo()
    {
        return $this->belongsTo(ContactInfo::class);
    }
}
