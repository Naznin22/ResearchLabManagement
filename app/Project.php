<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //table name
    protected $table = 'projects';
    //primary key
    public $primaryKey = 'Project_ID';
    //timestamps
    public $timestamps = true;

    public function scopeSearch($query, $s){
        return $query->where('Project_Title','like','%' .$s. '%')
        ->orWhere('Project_details','like','%' .$s. '%');
    }

    public function members()
    {
        return $this->hasMany('App\Member','Project_ID');
    }

}
