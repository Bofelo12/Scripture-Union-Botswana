<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = ['event_name', 'event_date', 'event_time', 'event_venue']; 
}
