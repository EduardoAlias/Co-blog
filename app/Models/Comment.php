<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
   
    public function post() //post_id
    {
     return $this->belongsTo(Post::class);
    }
    public function author() //Laravel matches the foreign key here he will be thinking that is author_id
    // thats why we override this on the second parameter
    {
     return $this->belongsTo(User::class, 'user_id');
    }
}
