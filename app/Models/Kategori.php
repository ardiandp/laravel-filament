<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $fillable = ['kategori', 'slug', 'deskripsi'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
