<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_time',
        'price',
        'user_id',
        'event_id',
    ];

    public static function store($request, $id=null){
        $event = $request->only(['date_time', 'price', 'user_id', 'event_id']);
        $event = self::updateOrCreate(['id' => $id], $event);
        return $event;
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
