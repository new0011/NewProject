<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ControlClass extends Controller
{
    protected $student;

    public function _construct(Student $student){
        $this->student = $student;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //return view("insert");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login');
    }

    public function home(){
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $req)
    {
        $student = new Student($req->all());
        $student->save();
        $mensaje = "Guardado exitosamente";
        return redirect('/')->with("mensaje", $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
