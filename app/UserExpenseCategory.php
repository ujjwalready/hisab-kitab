<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserExpenseCategory extends Model
{
    //
    protected $fillable = ['user_id', 'field_name'];

    public function user(){
    	$this->belongsTo('App\User', 'user_id');
    }
}
