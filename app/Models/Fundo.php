<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fundo extends Model
{
    //use HasFactory;
    protected $primaryKey = 'cod_fundo';
    protected $fillable = ['nome_fundo', 'qdt_integrantes', 'status'];
}
