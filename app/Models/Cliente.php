<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nm_razao_social', 'nm_fantasia', 'cd_cnpj', 
    'ds_endereco', 'nm_email', 'cd_telefone', 'nm_responsavel', 'cd_cpf', 'cd_celular'];
}
