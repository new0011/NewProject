<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        div.formxd{
            border-color: black;
            border-style: solid;
            border-radius: 5px;
            margin-top: 100px;
            position: relative;
            width: 30%;
            background-color: white;
        }
    </style> 

    <div class="container formxd">
        <div class="container mb-2 mt-2 text-center">
            <h2>Inicio de Sesión</h2>
        </div>
        <div class="container">
            <form action="{{route('CInsert')}}" method="get">
                <div class="mb-3">
                    <label class="form-label">Correo:</label>
                    <input required type="email" class="form-control" placeholder="Introduce tu correo INSTITUCIONAL" onchange="validarCorIns(this.value)">
                </div>

                <div class="mb-3">
                    <label class="form-label">Password:</label>
                    <input required type="password" class="form-control" placeholder="Introduce tu contraseña">
                </div>
                <div class="text-center mt-2">
                    <button type="submit" class="btn btn-success mt-3 mb-4">Ingresar</button>
                </div>
            </form>
            <script type="text/javascript" src="{{URL::asset('Clase.js')}}"></script>
        </div>
    </div>   
</body>
</html>
