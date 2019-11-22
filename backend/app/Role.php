<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class role extends Model
{
    public function users() {
    return $this ->hasMany(User::class);
  }

}
