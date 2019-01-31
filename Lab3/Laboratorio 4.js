//Función main
function main()
{
	tabla();
	suma();
	contador([2,5,-2,5,7,-8,-3,0,2,-5,0,1,-4,0,3]);
	promedio([
		[2,2,2],
		[3,4,2,6,3,4],
		[6,4,5,5,2,4,6,3,4,9],
		[3,3,3]
		]);
	numeroInverso(123456789);
	document.write("<p>Vamos a resolver el típico problema de crear un rectángulo, <br>"+
		"al cual se le asigna un largo, un ancho y se calcula su área y su perímetro.");
	problema();
	document.write("</p>");

}
main();

//Función para generar tabla de cuadrados y cubos de 1 a n
function tabla()
{
	var numeros = [];
	var cuadrados = [];
	var cubos = [];
	var numero = parseInt(prompt("Ingresa un número entero"));
	for (let i = 1; i <= numero; i ++)
	{
		numeros.push(i);
		cuadrados.push(i*i);
		cubos.push(i*i*i);
	}
	document.write("<p>Tabla de números desde 1 hasta " + numero + ":<br>X^1: " + numeros + "<br>X^2: " + cuadrados + "<br>X^3: " + cubos + "</p>");
}

//Función que verifica la respuesta de la suma de 2 números aleatorios
function suma()
{
	var x, y;
	x = Math.floor((Math.random() * 10000) + 1);
	y = Math.floor((Math.random() * 10000) + 1);
	var respuesta = prompt(x + " + " + y + " =");
	document.write("<p>La respuesta a la suma " + x + " + " + y + " es ");
	if (respuesta == x + y) document.write("Correcta");
	else document.write("Incorrecta");
}

//Función que cuenta la cantidad de números positivos, negativos y 0s en un arreglo dado
function contador(numeros)
{
	var negativos = 0, positivos = 0, ceros = 0;
	for (var i = 0; i < numeros.length; i++)
		if (numeros[i] == 0) ceros ++;
		else if (numeros[i] > 0) positivos++;
		else negativos++;
	document.write("<p>Para el arreglo " + numeros + " en total se tienen: <br>" + positivos + " numeros positivos<br>" 
		+ negativos + " numeros negativos<br>" + ceros + " ceros</p>");
}

//Función que calcula el promedio por filas en una matriz
function promedio(filas)
{
	var suma;
	document.write("<p>Se tiene a la matriz: <br>");
	for (let i = 0; i < filas.length; i ++)
		document.write(filas[i]+"<br>");
	document.write("Donde su promedio por fila es de:<br>");
	for (let i = 0; i < filas.length; i ++)
	{
		suma = 0;
		for (let j = 0; j < filas[i].length; j++)
		{
			suma+=filas[i][j];
		}
		document.write("Fila " + (i+1) + ": " + suma/filas[i].length + "<br>");
	}
	document.write("</p>");
}

//Función que imprime un número colocado al revés
function numeroInverso(numero)
{
	numero = "" + numero;
	var ans = "";
	for(var i = numero.length - 1; i >= 0; i --)
		ans += numero[i];
	document.write("<p>Número al derecho: " + numero + " y al revés " + ans + "</p>");
}

function problema()
{
	let Rectangulo = new Object();
	Rectangulo.largo = parseInt(prompt("Ingresa el largo del rectángulo"));
	Rectangulo.ancho = parseInt(prompt("Ingresa el ancho del rectángulo"));
	Rectangulo.perimetro = function(){return this.largo*2 + this.ancho*2;}
	Rectangulo.area = function(){return this.largo*this.ancho;}
	document.write("<br>El largo del rectángulo es de: "+Rectangulo.largo);
	document.write("<br>El ancho del rectángulo es de: "+Rectangulo.ancho);
	document.write("<br>El perimetro del rectángulo es de: "+Rectangulo.perimetro());
	document.write("<br>El área del rectángulo es de: " + Rectangulo.area());
}