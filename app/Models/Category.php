<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function certificates()
    {
        return $this->morphedByMany(Certificate::class, 'categoriable');
    }

    public function projects()
    {
        return $this->morphedByMany(Project::class, 'categoriable');
    }

    // public function certificates()
    // {
    //     return $this->hasMany(Certificate::class);
    // }

    // public function projects()
    // {
    //     return $this->hasMany(Project::class);
    // }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
