<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Target extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'fullname', 'user_id', 'target_category_id', 'state_id', 'constituency', 'designation', 'phone_number', 'email', 'approved'];

    protected $primaryKey = 'id';

    public function campaigns(){
        return $this->hasMany(Campaign::class);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function target_category(){
        return $this->belongsTo(TargetCategory::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
