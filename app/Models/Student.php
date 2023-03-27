<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'Student';
    protected $primaryKey = 'IDS';
    
    protected $fillable = [
        'IDS',
        'Matricula',
        'CorrInst',
        'CorrPerr',
        'NameA',
        'LastName',
        'Class',
        'Classroom'
    ];

    public function getStudent(){
        return Student::all();
    }

    public function getStudentID($id){
        return Student::find($id);
    }
}
