<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->attributes['available_tickets'] = $this->attributes['capacity'] ?? 0;
    }
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'description',
        'date',
        'location',
        'poster',
        // 'status', // 'pending', 'approved', 'rejected', 'cancelled',
        'capacity',
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
    public function user() {
        return $this->belongsTo(User::class);
    }
}
