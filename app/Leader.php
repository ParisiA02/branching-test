<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
        "name",
        "weakly_hours"
    ];
}
