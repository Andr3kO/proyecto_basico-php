console.log (sigla_senati);
console,log(nombre);

//array
let edades = [23,45,22,19,5,70,100];
for (let i = 0; i <edades.length; i++){
    console.log (edades[i]);

}
for (item of edades){
    console.log(item);
}

edades.forEach(function(edad) {
    console.log(edad);
});

edades.map(function(e) {
    console.log(e);
});

edades.map(function(e) {
    if (e >= 18) {
        console.log(e + " es mayor de edad");
    } else {
        console.log(e + " es menor de edad");
    }
});



//funcion normal
function nombrefuncion(){

}
//funcion anonima

function (){
}

