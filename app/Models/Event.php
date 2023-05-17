<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Hash;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'start_date',
        'end_date',
        'user_id'
    ];
    // _______________________create and update event__________
    public static function store($request, $id=null){
        $event = $request->only(['name', 'description', 'location', 'start_date', 'end_date','user_id']);
        $event = self::updateOrCreate(['id' => $id], $event);
        $teams = request('teams');
        $event->teams()->sync($teams);
        return $event;
    }
    // __________________________relationship___________________
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function tickets():HasMany
    {
        return $this->hasMany(Ticket::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'event_teams')->withTimestamps();
    }
}
