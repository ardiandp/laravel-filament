<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable = [
        'category_id',
        'image',
        'title',
        'content'
    ];



    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
