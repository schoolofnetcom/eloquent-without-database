<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Role extends Model
{
    use HasFactory, Sushi;

    /**
    * AQUI O PACOTE UTILIZA CACHE
    * Você não precisa informar a coluna ID o pacote vai adicionar pra você
    */
    protected $rows = [
        ['id' => 1, 'label' => 'admin'],
        ['id' => 2, 'label' => 'manager'],
        ['id' => 3, 'label' => 'user']
    ];

    // INFORMAR OS TIPOS DAS COLUNAS MANUALMENTE
    protected $schema = [
        'label' => 'string',
    ];

    // AQUI O PACOTE NÃO UTILIZA CACHE
    // public function getRows()
    // {
    //     // buscar dados em uma api externa
    //     return [
    //         ['id' => 1, 'label' => 'admin'],
    //         ['id' => 2, 'label' => 'manager'],
    //         ['id' => 3, 'label' => 'user'],
    //     ];
    // }

}
