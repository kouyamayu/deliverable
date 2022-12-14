<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    use HasFactory;
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function gyms()
    {
        return $this->belongsToMany(Gym::class);
    }
    
    public function bodies()
    {
        return $this->belongsToMany(Body::class);
    }
    
    public function trainings()
    {
        return $this->belongsToMany(Training::class);
    }
}
