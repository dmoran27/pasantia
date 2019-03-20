<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Equipo extends Model
{
    //
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
     protected $table = 'equipos';
    protected $fillable = [
           'nombre',    
            'identificador',
            'marca',
            'modelo',
            'serial',
          	'estado_equipo',
            'perteneciente',
            'observacion',
            'user_id',
            'tipo_id',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

  
     public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }

     public function tipo()
    {
        return $this->BelongsTo(Tipo::class);
    }

    public function departamentos(){
    	return $this->HasMany(Departamento::class);
    }

public function perifericos(){
    	return $this->BelongsToMany(Periferico::class);
    }
public function caracteristicas(){
    	return $this->BelongsToMany(Caracteristica::class);
    }




}
