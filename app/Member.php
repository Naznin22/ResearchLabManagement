<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //table name
    protected $table = 'members';
    //primary key
    //public $primaryKey = 'id';
    //timestamps
    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function user()
    {
        return $this->hasOne('App\User','id');
    }

    public function profile()
    {
        return $this->hasOne('App\Profile','id');
    }

}
