<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function developer()
    {
        return $this->belongsTo(Developer::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }

    public function consoles()
    {
        return $this->belongsToMany(Console::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
