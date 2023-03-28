<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Consultas;
use App\Models\Student;

class ConsultasTabla extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory(5)->create();
        Consultas::factory(5)->create();
        /*DB::table('Consultas')->insert([
            'Calificacion' => '9.8',
            'Materia' => 'SI',
            'Horario' => '22:00',
            'PromGeneral' => '9.23',
        ]);*/
    }
}
