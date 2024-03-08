<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'payment_reference',
        'user_id',
        'event_id',
        'amount',
        'status',
        // 'transaction_id',
        // 'payment_method',
        // 'payment_gateway',
        // 'transaction_status',
        // 'transaction_response',
        // 'transaction_date',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
