<?php

namespace App\Modules\Events;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = [];

    public function creator() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
