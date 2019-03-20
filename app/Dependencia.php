<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Dependencia extends Model
{
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'dependencias';
    protected $fillable = [
           'nombre',
            'piso',
            'edificio_id',
            'user',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

   public function clientes(){
        return $this->HasMany(Cliente::class);
    }
     public function edificio()
    {
        return $this->BelongsTo(Edificio::class);
    }
     public function user()
    {
        return $this->BelongsTo(User::class);
    }
     
    

}
