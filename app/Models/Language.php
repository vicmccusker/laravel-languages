<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $hidden = ['updated_at', 'created_at', 'difficulty_id', 'continent_id', 'spoken-by', 'pivot'];

    use HasFactory;

    public function difficulty()
    {
        return $this->belongsTo(Difficulty::class);
    }

    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    public function friends()
    {
        return $this->belongsToMany(Friend::class);
    }

    public function random()
    {
        return $this->hasMany(RandomWord::class);
    }
}
