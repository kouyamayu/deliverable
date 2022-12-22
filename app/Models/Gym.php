<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gym extends Model
{
    use HasFactory;
    use SoftDeletes;
    
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
    
    protected $fillable = [
    'name',
    'city_id',
    'price',
    'is_24_hours',
    'contents',
    'url',
    'address'
    ];
}
