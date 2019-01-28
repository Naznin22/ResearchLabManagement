<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Selected extends Model
{

    use Notifiable;
     //table name
     protected $table = 'selecteds';
     //primary key
     public $primaryKey = 'user_id';
     //timestamps
     public $timestamps = true;
}
