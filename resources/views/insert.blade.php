@extends('work')
@section('contenido')
@if(session()->has("mensaje"))
    {!!"<script>Swal.fire('Listo', 'Guardado Exitosamente', 'success')</script>"!!}
    <div class="alert alert-primary alert-dimissible fade show text-center" role="alert">
        <strong>{{session('mensaje')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<div class="container">
    <div class="container text-center">
        <h2>Insertar Alumno</h2>
    </div>
    <div class="container">
        <form action="{{route('saveS.store')}}" method="post">
            @csrf
            <div class="mb-2">
                <label class="form-label">Introduce Matricula</label>
                <input required type="number" placeholder="Tiene 9 digitos..." name="Matricula" class="form-control" onchange="validarMatricula(this.value)">
            </div>
            <div class="mb-2">
                <label class="form-label">Introduce Correo Institucional</label>
                <input required type="text" placeholder="Terminacion en upq.edu.mx o upq.mx" name="CorrInst" class="form-control" onchange="validarCorIns(this.value)">
            </div>
            <div class="mb-2">
                <label class="form-label">Introduce Correo Personal</label>
                <input required type="text" name="CorrPerr" class="form-control" placeholder="Correo que usas siempre" onchange="validarCorPer(this.value)">
            </div>
            <div class="mb-2">
                <label class="form-label">Nombre</label>
                <input required type="text" name="NameA" class="form-control" placeholder="First Name Please">
            </div>
            <div class="mb-2">
                <label class="form-label">Apellido Paterno</label>
                <input required type="text" name="LastName" class="form-control" placeholder="Primer Apellido">
            </div>
            <div class="mb-2">
                <label class="form-label">Clase</label>
                <input required type="text" name="Class" class="form-control" placeholder="Clase o grupo">
            </div>
            <div class="mb-2">
                <label class="form-label">Salon</label>
                <input required type="text" name="Classroom" class="form-control" placeholder="Salon que se cursa">
            </div>

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-success mx-auto">Mandar</button>
            </div>
        </form>
        <script type="text/javascript" src="{{URL::asset('Clase.js')}}"></script>
    </div>
</div>    
@stop