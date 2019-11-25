<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'path', 'name',
    ];

    public function getUrlPath(){
        return Storage::url($this->path);
    }
}
