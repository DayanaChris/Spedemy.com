<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class profile_picture extends Model
{
    //table name
    protected $table= 'users';
    //primary key
    public $primaryKey = 'user_id';
    //Timestamps
    public $timestamps= true;


    // tutotial 10

    public function user(){
        return $this-> belongsTo('App\User');
    }
}
