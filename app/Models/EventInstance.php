<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class EventInstance extends Model
{
    use Uuids;
    protected $guarded = [];
    protected $casts = [
        'start' => 'datetime',
        'end' => 'datetime',
    ];
}
