<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'poster',
        'available_tickets',
        'ticket_price',
        'mode',
        'user_id',
        'category_id',
    ];
    
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function tickets() {
        return $this->hasMany(Ticket::class);
    }
    // public function user() {
    //     return $this->belongsTo(User::class);
    // }
}
