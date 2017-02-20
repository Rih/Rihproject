<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\User;
class Website extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "websites";
  
    protected $fillable = [
        'name','url','desc','approved','category_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
  		
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }
}
