<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id']; //biar bisa mash input

    public function posts()
    {
        // 1 katerogi bisa dimiliki oleh banyak post
        return $this->hasMany(Post::class);
    }
}
