<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'email', 'campaign_id', 'rating', 'comment'];

    public function campaign(){
        return $this->belongsTo(Campaign::class);
    }
}
