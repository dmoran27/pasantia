<?php

namespace App;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    protected $table = 'users';
    protected $fillable = [
           'nombre',
           'apellido',
           'cedula',
           'telefono',
           'sexo',          
           'area_id',  
           'email',
           'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function area(){
        return $this->belongsTo(Area::class);
    }
     public function tickets()
    {
        return $this->HasMany(Ticket::class);
    }
     public function perifericos()
    {
        return $this->HasMany(Periferico::class);
    }
     public function caracteristicas()
    {
        return $this->HasMany(Caracteristica::class);
    }
     public function tipos()
    {
        return $this->HasMany(Tipo::class);
    }

     public function equipos()
    {
        return $this->HasMany(Equipo::class);
    }
    public function softwares()
    {
        return $this->HasMany(Software::class);
    }
    public function clientes()
    {
        return $this->HasMany(Cliente::class);
    }
     public function dependencias()
    {
        return $this->HasMany(Dependencia::class);
    }
     public function edificios()
    {
        return $this->HasMany(Edificio::class);
    }   
    
}

