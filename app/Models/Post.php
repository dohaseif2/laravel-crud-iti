<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'body','user_id','avatar'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;

}
