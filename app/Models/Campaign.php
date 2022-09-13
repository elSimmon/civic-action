<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function participations(){
        return $this->hasMany(Participation::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
