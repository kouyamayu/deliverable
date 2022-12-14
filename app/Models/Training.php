<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    
    public function machines()
    {
        return $this->belogsToMany(Machine::class);
    }
}
