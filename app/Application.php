<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
     //table name
     protected $table = 'applications';
     //primary key
     public $primaryKey = 'user_id';
     //timestamps
     public $timestamps = true;

     public function user()
     {
         return $this->belongsTo('App\User');
     }
}
