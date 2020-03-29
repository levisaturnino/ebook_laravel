<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = ['comment', 'status'];

    public function post()
    {
    	return $this->belongsTo(Post::class);
    }
}
