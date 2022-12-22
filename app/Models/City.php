<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
    
    public function gyms()
    {
        return $this->hasMany(Gym::class);
    }
    
    public function getByCity(int $limit_count=10)
    {
        return $this->gyms()->with('city')->orderBy('updated_at','DESC')->paginate($limit_count);
    }
    
    protected $fillable = [
    'name',
    'prefecture_id',
    ];
}
