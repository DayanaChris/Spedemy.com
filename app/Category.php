<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    //table name
  protected $table= 'categorys';
  //primary key
  public $primaryKey = 'category_id';
  // //Timestamps
  // public $timestamps= true;
  public $timestamps = false;



  // tutotial 10

  public function user(){
      return $this-> belongsTo('App\User');
  }
}
