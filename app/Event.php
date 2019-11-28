<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $fillable = [
        'event_name',
        'event_venue', 
        'start_date',
        'end_date',
        'start_time',
        'end_time'];
}
