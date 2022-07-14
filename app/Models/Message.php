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
        'contact_info_id'
    ];

    public function contact_info()
    {
        return $this->belongsTo(ContactInfo::class, 'contact_info_id');
    }
}
