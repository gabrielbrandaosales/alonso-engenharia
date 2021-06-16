<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Proposta extends Model
{
    use HasFactory;

    protected $table = "proposta";

    public static function getProposta()
    {
        $records = DB::table('proposta')->select('id', 'cliente_id', 'nm_endereco_obra',
        'qt_valor_total', 'qt_sinal', 'qt_parcelas', 'qt_valor_parcelas',
         'dt_inicio_pgt', 'dt_parcelas', 'nm_anexo', 'nm_status')->get()->toArray();
        return $records;
    }

    protected $fillable = ['id', 'cliente_id', 'nm_endereco_obra',
     'qt_valor_total', 'qt_sinal', 'qt_parcelas', 'qt_valor_parcelas',
      'dt_inicio_pgt', 'dt_parcelas', 'nm_anexo', 'nm_status'];

    public function relCliente(){
        return $this->HasOne(Cliente::class);
    }

    
    
}
