<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    public function owner() {
        $this->belongsTo(Owner::class);
    }
}
