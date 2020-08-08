<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    protected $table="credito";

    public $primaryKey = "id_credito";

    protected $fillable = [
        'id_user',
        'saldo'
    ];
}
