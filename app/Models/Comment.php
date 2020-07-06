<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];
    protected $with = ['user'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
