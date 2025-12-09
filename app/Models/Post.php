<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title', 'content', 'admin_id'];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
