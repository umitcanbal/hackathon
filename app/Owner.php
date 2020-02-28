<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function pet() {
        $this->hasMany(Pet::class);
    }
}
