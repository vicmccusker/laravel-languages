<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RandomWords extends Model
{
    use HasFactory;

    public function languages()
    {
        return $this->hasMany(Language::class);
    }
}
