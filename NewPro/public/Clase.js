function validarMatricula(n){
    console.log(n);
    if(n.length>9 || n.length<9){
        alert("La Matricula debe contener solo 10 espacios");
    }
}

function validarCorIns(n){
    console.log(n);
    var re = /(\w|\d|([.]))+@+(upq.)+((mx)|(edu.mx))/;
    if(!re.test(n)){
        alert("Correo institucional erroneo");
    }
}

function validarCorPer(n){
    console.log(n);
    var re = /(\w|\d|([.]))+@+\w+([.])+\w+/;

    if(!re.test(n)){
        alert("Correo personal erroneo");
    }
}
