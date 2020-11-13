<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class State extends Model
{
    use HasFactory, Sushi;

    protected $rows = [
        [
            'name' => 'Acre',
            'abbr' => 'AC'
        ],
        [
            'name' => 'Alagoas',
            'abbr' => 'AL',
        ],
        [
            'name' => 'Amapá',
            'abbr' => 'AP',
        ],
        [
            'name' => 'Amazonas',
            'abbr' => 'AM',
        ],
        [
            'name' => 'Bahia',
            'abbr' => 'BA',
        ],
        [
            'name' => 'Ceará',
            'abbr' => 'CE',
        ],
        [
            'name' => 'Distrito Federal',
            'abbr' => 'DF',
        ],
        [
            'name' => 'Espírito Santo',
            'abbr' => 'ES',
        ],
        [
            'name' => 'Goiás',
            'abbr' => 'GO',
        ],
        [
            'name' => 'Maranhão',
            'abbr' => 'MA',
        ],
        [
            'name' => 'Mato Grosso',
            'abbr' => 'MT',
        ],
        [
            'name' => 'Mato Grosso do Sul',
            'abbr' => 'MS',
        ],
        [
            'name' => 'Minas Gerais',
            'abbr' => 'MG',
        ],
        [
            'name' => 'Pará',
            'abbr' => 'PA',
        ],
        [
            'name' => 'Paraíba',
            'abbr' => 'PB',
        ],
        [
            'name' => 'Paraná',
            'abbr' => 'PR',
        ],
        [
            'name' => 'Pernambuco',
            'abbr' => 'PE',
        ],
        [
            'name' => 'Piauí',
            'abbr' => 'PI',
        ],
        [
            'name' => 'Roraima',
            'abbr' => 'RR',
        ],
        [
            'name' => 'Rondônia',
            'abbr' => 'RO',
        ],
        [
            'name' => 'Rio de Janeiro',
            'abbr' => 'RJ',
        ],
        [
            'name' => 'Rio Grande do Norte',
            'abbr' => 'RN',
        ],
        [
            'name' => 'Rio Grande do Sul',
            'abbr' => 'RS',
        ],
        [
            'name' => 'Santa Catarina',
            'abbr' => 'SC',
        ],
        [
            'name' => 'São Paulo',
            'abbr' => 'SP',
        ],
        [
            'name' => 'Sergipe',
            'abbr' => 'SE',
        ],
        [
            'name' => 'Tocantins',
            'abbr' => 'TO',
        ]
    ];

}
