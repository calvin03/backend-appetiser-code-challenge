<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //

    protected $table = 'events_list';
    protected $hidden = ['id', 'created_at', 'updated_at'];
}
