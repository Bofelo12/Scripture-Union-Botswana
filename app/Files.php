<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Files extends Model
{
    protected $table  = 'files';

    public $fillable = ['path', 'name' ,'category'];

    public function getUrlPath(){
        return Storage::url($this->path);
    }
}
