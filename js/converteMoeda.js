var numero = 9.9;
var formatado = "R$ " + numero.toFixed(2).replace("." , ",");

console.log(formatado);

var texto = "R$ 120,35";

var soNumero = texto.replace("R$ ", "");
var soNumero = soNumero.replace("," , ".");

var valor = parseFloat(texto.replace("R$ " , ""));

var valor = parseFloat(soNumero);

console.log(valor);