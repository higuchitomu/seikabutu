<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
    'title',
    'content',
    'user_id',
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
     public function user()
   {
    return $this->belongsTo(User::class);
   }
   public function participants()
   {
    return $this->hasMany(Participation::class);
   }
}   