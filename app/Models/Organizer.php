<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    use Uuids;
    protected $guarded = [];
}
