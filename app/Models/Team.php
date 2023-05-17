<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country',
        'user_id'
    ];
    // _______________________create and update team__________
    public static function store($request, $id=null){
        $team = $request->only(['name', 'country', 'user_id']);
        $team = self::updateOrCreate(['id' => $id], $team);
        return $team;
    }
    // __________________________relationship_________________
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_teams')->withTimestamps();
    }
}
