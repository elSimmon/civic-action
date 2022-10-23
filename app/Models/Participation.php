<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    use HasFactory;

    protected $fillable = ['campaign_id', 'organization_id', 'name', 'email', 'phone', 'state_id', 'lga_id'];

    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }
}
