<?php

namespace App;
use App\RoomType;
use App\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class room extends Model
{ 
	use HasApiTokens, Notifiable;

    public function roomtype() {
    return $this ->belongsTo(RoomType::class,'type_id');
  }
  public function bookings() {
    return $this ->hasMany(Booking::class);
  }


}
