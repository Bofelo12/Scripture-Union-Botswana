<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    protected $table  = 'photos';

    public $fillable = ['path'];

    public function getUrlPath(){
        return Storage::url($this->path);
    }
}
