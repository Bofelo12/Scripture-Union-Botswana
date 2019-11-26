<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    protected $table  = 'files';

    public $fillable = ['path', 'name'];

    public function getUrlPath(){
        return Storage::url($this->path);
    }
}
