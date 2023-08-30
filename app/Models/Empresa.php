<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'cnpj',
        'cep',
        'status',
        'user_id',
    ];

    public function Dono(){
        return $this->belongsTo(User::class,'user_id');
    }
}
