alert("ola");
var curso = "WD-43";
alert(curso);

var i;
var list = new Array();

for(i = 0; i < 10; i++) {
	if(i % 2 != 0){
		list.push(i);
	}
}

console.log(list);

i = 1;
var x = 0;
var aux = 0;

while(i <= 100){

	x += i;
	console.log(x);
	i++;
}

var pessoas = ["João", "José", "Maria", "Sebastião", "Antônio"];

i = 0;
while(i < pessoas.length){

	if(pessoas[i].length == 4){
		console.log(pessoas[i]);
	}

	i++;
}

