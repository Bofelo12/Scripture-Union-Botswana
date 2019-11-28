<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MessageFile extends Model
{
    protected $table = 'message_files';
    protected $fillable = ['file_path', 'user_id', 'thread_id'];

    public function getUrlPath(){
        return Storage::url($this->path);
    }
}
