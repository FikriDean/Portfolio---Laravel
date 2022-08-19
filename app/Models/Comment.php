<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
