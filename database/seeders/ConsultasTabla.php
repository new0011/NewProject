<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Consultas;

class ConsultasTabla extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Consultas::factory(10)->create();
        /*DB::table('Consultas')->insert([
            'Calificacion' => '9.8',
            'Materia' => 'SI',
            'Horario' => '22:00',
            'PromGeneral' => '9.23',
        ]);*/
    }
}
