<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Software extends Model
{
    //
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'softwares';
    protected $fillable = [
    'nombre',
    'tipos_id',
    'caracteristicas_id',
    'descripcion',
    'user_id',
    ];


public function caracteristicas(){
    	return $this->BelongsToMany(Caracteristica::class);
    }

public function softwares(){
    	return $this->BelongsToMany(Software::class);
    }
public function tipo()
    {
        return $this->BelongsTo(Tipo::class);
    }
}



