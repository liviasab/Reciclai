<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'nome',
        'cnpj',
        'cep',
        'status',
        'user_id',
    ];

    public function donoDaEmpresa(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function pontocoletas() {
        return $this->hasMany(PontoColeta::class, 'pc_emp_id');
    }
}
