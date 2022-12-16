<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gym extends Model
{
    use HasFactory;
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function machines()
    {
        return $this->belongsToMany(Machine::class);
    }
    
    public function getPaginateByLimit(int $limit_count=10)
    {
        return $this->orderBy('updated_at','DESC')->paginate($limit_count);
    }
}
