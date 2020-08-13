<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'venta';

    protected $primaryKey= 'id_venta';

    protected $fillable = [
    	'id_venta',
        'id_cliente',
		'total_venta',
        'tipo_venta',
        'estado'
    ];

    protected $guarded = [

    ];
}
