<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Continent extends Model
{
    public $hidden = ['created_at', 'updated_at'];

    use HasFactory;

    public function language(): HasMany
    {
        return $this->hasMany(Language::class);
    }
}
