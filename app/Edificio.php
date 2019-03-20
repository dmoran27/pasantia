<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Edificio extends Model
{
    //
use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'edificios';
    protected $fillable = [
    'nombre',
    'user_id',
    ];

    
    public function departamentos(){
    	return $this->HasMany(Departamento::class);
    }

     public function user()
    {
        return $this->BelongsTo(User::class);
    }
}
