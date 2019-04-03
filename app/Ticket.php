<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Ticket extends Model
{
    //
    use SoftDeletes; //Implementamos 

    protected $dates = ['deleted_at'];
    protected $table = 'tickets';
    protected $estado =['Asignado','Abierto','Cerrado','En espera'];
    protected $accion=['Solventado','Revisado','Sin Solucion'];
    protected $prioridad=['Alta','Media','Baja'];
    protected $fillable = [


            'identificador',
            'estado',
            'accion',
            'prioridad',
            'observacion',
            'tiempo_i',
            'tiempo_c',
            'user_id',
            'cliente_id',
    ];


     public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function cliente()
    {
        return $this->BelongsTo(Cliente::class);
    }
}
