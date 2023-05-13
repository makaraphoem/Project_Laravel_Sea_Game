<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'date_time',
        'user_id'
    ];

    public static function store($request, $id=null){
        $event = $request->only(['name', 'description', 'location', 'date_time', 'user_id']);
        $event = self::updateOrCreate(['id' => $id], $event);
        return $event;
    }
}
