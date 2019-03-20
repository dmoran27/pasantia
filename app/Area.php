<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 
class Area extends Model
{
    //   
use SoftDeletes; //Implementamos 
    protected $dates = ['deleted_at'];
	protected $table = 'areas';
    protected $fillable = [
     'nombre',
     'descripcion',
    ];

    
    public function users()
    {
        return $this->HasMany(User::class);
    }


}
