var hola = [[1,2,3],[2,2,2],[3,4,3]]

tabla();
suma();
contador([1,2,3,4,5,3,2,1,1,-3,-4,0,0,8,9,-7,0,-5,0,3,-4,5,6,-3,0,6,7,-8])
promedio(hola);
//numeroInverso(123456789);
function tabla()
{
	var numeros = prompt("Ingresa un número entero");
}

function suma()
{
	var x, y;
	x = Math.floor((Math.random() * 100) + 1);
	y = Math.floor((Math.random() * 100) + 1);
	var respuesta = prompt(x + " + " + y + " =");
	if (respuesta == x + y) alert("Perfecto");
	else alert("Incorrecto");
}

function contador(numeros)
{
	var negativos = 0, positivos = 0, ceros = 0;
	for (var i = 0; i < numeros.length; i++)
		if (numeros[i] == 0) ceros ++;
		else if (numeros[i] > 0) positivos++;
		else negativos++;
	alert("En total se tienen: \n" + positivos + " numeros positivos\n" + negativos + " numeros negativos\n" + ceros + " ceros");
}

function promedio(...filas)
{
	var suma, promedio=0;
	for (var i = 0; i < filas.length; i ++)
		suma = 0;
		for (var j = 0; j < filas[i].length; j++)
			/*suma += filas[i][j];
		promedio[i] = suma/filas[i].length;*/
	alert(promedio);
}

function numeroInverso(numero)
{
	var ans;
	for(var i = numero.length - 1; i >= 0; i --)
		ans += ''+numero[i];
	alert(ans);
}