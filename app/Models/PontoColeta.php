<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PontoColeta extends Model
{
    use HasFactory;

    protected $fillable =[
        'id',
        'status',
        'latitude',
        'longitude',
        'pc_emp_id',
    ];

    public function donoDoPontoColeta(){
        return $this->belongsTo(Empresa::class,'pc_emp_id');
    }
}
