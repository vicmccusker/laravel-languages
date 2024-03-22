<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public $hidden = ['id', 'pivot', 'created_at', 'updated_at'];

    use HasFactory;

    public function languages()
    {
        return $this->belongsToMany(Language::class);
    }
}
