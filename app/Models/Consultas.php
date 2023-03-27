<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultas extends Model
{
    use HasFactory;
    protected $table = 'Consultas';
    protected $primaryKey = 'IDCal';
    
    protected $fillable = [
        'IDCal',
        'Calificacion',
        'Materia',
        'Horario',
        'PromGeneral',
    ];

    public function getStudent(){
        return Student::all();
    }

    public function getStudentID($id){
        return Student::find($id);
    }

}
