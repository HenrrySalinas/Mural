<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persona extends Model
{
    use SoftDeletes;
    protected $table='personas';
    protected $fillable=['nombre','paterno','materno','email'];
    protected $dates=['deleted_at'];

    public function post()
    {
    	return $this->hasMany('App\Post','id_persona');
    	/*
		return $this->hasMany('App\MODELNAME', 'foreign_key');
		return $this->hasMany('App\MODELNAME', 'foreign_key', 'local_key');
    	*/
    }

}
