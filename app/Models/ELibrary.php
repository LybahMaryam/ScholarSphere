<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ELibrary extends Model
{
    use HasFactory;
    protected $table = 'elibraries';
    protected $fillable = ['user_id', 'title', 'author', 'file_path', 'link'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
