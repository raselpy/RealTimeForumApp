<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function like(){
        return $this->hasMany(Like::class);
    }

    public function question(){
        return $this->belongsTo(Question::class);
    }
}
