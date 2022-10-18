<?php

namespace App\Models;

use App\Models\Skill;
use App\Models\Formation;
use App\Models\Experience;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Identity extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function formations()
    {
        return $this->hasMany(Formation::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }
}
