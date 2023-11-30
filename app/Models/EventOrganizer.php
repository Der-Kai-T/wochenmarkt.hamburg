<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class EventOrganizer extends Model
{
    use Uuids;
    protected $guarded = [];
}
