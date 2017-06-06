

function formatoMoedaReal(moeda) {
	return "R$ " + moeda.toFixed(2).replace("." , ",");
}

function formatoMoedaRealFloat(moeda) {
	return parseFloat(moeda.replace("R$ " , "").replace("," , "."));
}