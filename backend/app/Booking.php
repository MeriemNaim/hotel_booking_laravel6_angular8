<?php

namespace App;
use App\User;
use App\Room;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
     public function user() {
    return $this->belongsTo(User::class,'user_id');
  }

  public function room() {
    return $this->belongsTo(Room::class,'room_id');
  }
}
