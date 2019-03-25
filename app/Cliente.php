<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Cliente extends Model
{
    use SoftDeletes; //Implementamos 
    protected $dates = ['deleted_at'];
    protected $sexo = ['Femenino', 'Masculino'];
    protected $tipo = ['Tecnico ORTSI', 'Profesor','Administrativo', 'Estudiante','Directivo', 'Otros'];
    protected $table = 'clientes';
    protected $fillable = [
           'nombre',
           'apellido',
           'cedula',
           'telefono',
           'sexo',
           'email',
           'tipo',          
           'dependencia_id',
           'user_id',  
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

   public function tickets(){
        return $this->HasMany(Ticket::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
     public function dependencia()
    {
        return $this->belongsTo(Dependencia::class);
    }
}

