<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //table name
    protected $table = 'profiles';
    
    public $timestamps = true;

    public function user()
    {
        return $this->hasOne('App\User','id');
    }

    public function member()
    {
        return $this->belongsTo('App\Member');
    }

    public function educations()
    {
        return $this->hasMany('App\Education','id');
    }

}
