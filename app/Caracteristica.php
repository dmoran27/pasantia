<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Caracteristica extends Model
{
    //
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'caracteristicas';
    protected $fillable = [
    'nombre',
    'propiedad',
    'user_id',
    ];


public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function perifericos(){
    	return $this->BelongsToMany(Periferico::class);
    }
	public function equipos(){
    	return $this->BelongsToMany(Equipo::class);
    }
  public function softwares(){
    	return $this->BelongsToMany(Software::class);
    }
}
