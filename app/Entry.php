<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    // $entry->user_error
    public function user(){
        return $this->belongsTo(User::class);
    }
}
