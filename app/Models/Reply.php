<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    protected $fillable = [
    'content',
    'user_id',
    'comment_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }  
    public function comment()
   {
    return $this->belongsTo(Comment::class);
   }
}