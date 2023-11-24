<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
    'title',
    'content',
    'user_id',
    'category_id'
    ];

 
   public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
   public function user()
   {
    return $this->belongsTo(User::class);
   }
   public function category()
   {
    return $this->belongsTo(Category::class);
   }
   public function replies()
   {
    return $this->hasMany(Reply::class);
   }
}   