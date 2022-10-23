<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    public function lgas(){
        return $this->hasMany(Lga::class);
    }

    public function campaigns(){
        return $this->hasMany(Campaign::class);
    }

    public function targets(){
        return $this->hasMany(Target::class);
    }

    public function participations(){
        return $this->hasMany(Participation::class);
    }
}
