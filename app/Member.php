<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //table name
    protected $table = 'members';
    //primary key
    //public $primaryKey = 'Project_ID';
    //timestamps
    public $timestamps = true;

    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
