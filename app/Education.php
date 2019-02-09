<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
  //table name
  protected $table = 'educations';
  //primary key
//   public $primaryKey = 'user_id';
  //timestamps
  public $timestamps = true; 
   
    public function profiles()
    {
        return $this->belongsToMany('App\Profile');
    }
}
