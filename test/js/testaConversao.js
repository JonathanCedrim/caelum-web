var valor = formatoMoedaReal(20);
var valor1 = formatoMoedaRealFloat(valor);

	try {
		if(valor != "R$ 20,00")	{
			throw new SyntaxError("Formato invalido");
		}
		console.log("conversao de moeda esta ok");
	} catch(err) {
		console.log("erro ao fazer conversao: " + err);

	}
console.log(valor);
console.log(valor1);