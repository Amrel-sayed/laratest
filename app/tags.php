<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{

	protected $fillable = [   'name','user_id'  ];
	
   public function posts(){

    	return $this->belongsToMany(post::class);
    }
    public function user(){

    	return $this->belongsTo(User::class);
    }
}
