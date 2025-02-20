<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{

    public function program()
    {
        return $this->belongsTo(Program::class);
    }
}
