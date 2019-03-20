<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Periferico extends Model
{
    //
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'perifericos';
    protected $fillable = [
    'nombre',
    'tipo_id',
    'user_id',
    ];





public function caracteristicas(){
    	return $this->BelongsToMany(Caracteristica::class);
    }

public function equipos(){
    	return $this->BelongsToMany(Equipo::class);
    }
public function tipo()
    {
        return $this->BelongsTo(Tipo::class);
    }
}
