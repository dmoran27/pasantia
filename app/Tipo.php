<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes; //Implementamos 
class Tipo extends Model
{
    //
    

    protected $dates = ['deleted_at'];
    protected $table = 'tipos';
    protected $tipo = ['Equipo', 'Software','Periferico','Componente'];
    protected $fillable = [
    'nombre',
    'descripcion',
    'tipo',
    'user_id',
    ];

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function perifericos()
    {
        return $this->HasMany(Periferico::class);
    }
 public function softwares()
    {
        return $this->HasMany(Software::class);
    }
    public function equipos()
    {
        return $this->HasMany(Equipo::class);
    }


}
