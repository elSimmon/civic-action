<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = ['organization_id', 'title', 'description', 'objective', 'category_id', 'target_id', 'state_id', 'lga_id', 'type', 'message', 'goal', 'approved'];

    protected $primaryKey = 'id';

    public function organization(){
        return $this->belongsTo(Organization::class);
    }

    public function participations(){
        return $this->hasMany(Participation::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function target(){
        return $this->belongsTo(Target::class,);
    }

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function reviews(){
        return $this->hasMany(Review::class);
    }
}
