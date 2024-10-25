<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Comment;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'judul',
        'deskripsi',
        'konten',
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function total_comments(){
        return $this->comments()->count();
    }

    public function scopeActive($query){
        return $query->where('active', true);
    }

}
