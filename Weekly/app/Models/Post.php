<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'titre', 'description', 'prix', 'image', 'user_id', 'categorie_id', 'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'categorie_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}

