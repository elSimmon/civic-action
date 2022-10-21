<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function targets(){
        return $this->hasMany(Target::class);
    }

    public function campaigns(){
        return $this->hasMany(Campaign::class);
    }
}
