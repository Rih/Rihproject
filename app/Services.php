<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "services";
  
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
}
