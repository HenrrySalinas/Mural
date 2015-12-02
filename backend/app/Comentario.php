<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comentario extends Model
{
    use SoftDeletes;
    protected $table='comentarios';
    protected $fillable=['contenido'];
    protected $dates=['deleted_at'];
    public function post()
    {
    	return $this->belongsTo('App\Post','id_post');
    	//return $this->belongsTo('App\MODELNAME', 'foreign_key', 'other_key');
    }
}
