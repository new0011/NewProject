@extends('work')
@section('contenido')
@if(session()->has("mensaje"))
    {!!"<script>Swal.fire('Listo', 'Guardado Exitosamente', 'success')</script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            @foreach ($XD as $XD)
            <label for="">{{$XD->NameA}}</label>
                
            @endforeach

<div class="container">
    <div class="container text-center">
        <h2>Insertar Alumno</h2>
    </div>
    <div class="container">
        <form action="" method="post">
            @csrf
            <div class="mb-2">
                <label class="form-label">Introduce Calificacion</label>
                <input required type="number" placeholder="Tiene 9 digitos..." name="Calificacion" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Materia</label>
                <input required type="text" placeholder="Terminacion en upq.edu.mx o upq.mx" name="Materia" class="form-control">
            </div>
            <div class="mb-2">
                <label class="form-label">Horario</label>
                <input required type="text" name="Horario" class="form-control" placeholder="Correo que usas siempre">
            </div>
            <div class="mb-2">
                <label class="form-label">PromGeneral</label>
                <input required type="text" name="PromGeneral" class="form-control" placeholder="First Name Please">
            </div>
            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success mx-auto">Mandar</button>
            </div>
        </form>
        <script type="text/javascript" src="{{URL::asset('Clase.js')}}"></script>
    </div>
</div>    
@stop