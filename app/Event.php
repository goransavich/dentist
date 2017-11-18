<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $primaryKey = 'event_id';

    protected $fillable = ['title', 'start', 'end', 'user_id'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    
}
