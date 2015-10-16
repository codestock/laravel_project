<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
	protected $table = "student";
	protected $primaryKey = 'sid';
	protected $fillable = ['sid','name','email','program'];
	public $timestamps = false;
}
