<?php

namespace App\Exports;

use App\Models\Proposta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PropostaExport implements FromCollection, WithHeadings 
{
    public function headings():array{
        return[
            'ID',
            'Cliente ID', 
            'Endereço da Obra',
            'Valor Total', 
            'Sinal', 
            'Parcelas', 
            'Valor das Parcelas',
            'Inicio do Pagamento', 
            'Data das Parcelas', 
            'nm_anexo', 
            'Status'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return AppModelsProposta::all();
        return collect(Proposta::getProposta());
    }
}
