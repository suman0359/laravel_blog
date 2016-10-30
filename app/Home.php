<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    //
    protected $fillable = ['floor_no', 'room_no', 'max_persons'];

    public function students()
    {
        return $this->hasMany('App\UserInfo');
    }
}
