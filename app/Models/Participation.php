<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{

    protected $fillable = [
    'content',
    'user_id',
    'event_id',
    'type_id'
    ];
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }  
    public function event()
   {
    return $this->belongsTo(Event::class);
   }
}