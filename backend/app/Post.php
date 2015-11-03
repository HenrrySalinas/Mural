<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseModel
{
	use SoftDeletes;
    protected $table='posts';
    protected $fillable=['titulo','descripcion','contenido','id_persona'];
    protected $dates=['deleted_at'];

    //protected $primaryKey="post_id" ===esto hace un override del primary key para customizar nombre de columa
    //public $timestamps = false;  ==setea los campos de auditoria en false 
    //protected $dateFormat = 'U'; ==setea el formato de fecha  use 'Y-m-d H:i:s'
    public function persona()
    {
    	return $this->belongsTo('App\Persona','id_persona');
    	//return $this->belongsTo('App\MODELNAME', 'foreign_key', 'other_key');
    }

    
}

class BaseModel extends Model {
  protected $dateFormat = 'Y-m-d H:i:s';
}