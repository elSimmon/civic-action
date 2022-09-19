<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'fullname', 'state_id', 'constituency', 'designation', 'phone_number', 'email', 'approved'];

    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
