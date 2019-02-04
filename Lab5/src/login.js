setupInputs();
let enter = document.querySelector("button");
enter.addEventListener("click", logIn);

var users = 
{
	"maneroto" : "nbphwwgj"
};

function setupInputs()
{
	let inputs = document.querySelectorAll("input");
	for (let i = 0; i < inputs.length; i ++)
	{
		inputs[i].addEventListener(
			"focus", function(){
				this.parentElement.classList.add("focused");
			}
			);
		inputs[i].addEventListener(
			"blur", function()
			{
				if (this.value == "") this.parentElement.classList.remove("focused");
			}
			);
		inputs[i].addEventListener(
			"keyup", function(event)
			{
				if (event.key == "Enter") logIn();
			});
	}
}

function logIn()
{
	let user = document.querySelector("input[name='user']").value;
	let password = document.querySelector("input[name='password']").value;
	let errorMessage = document.querySelector(".errorMessage");
	if (userExists(user))
	{
		if (users[user] == encrypt(password)) window.location.assign("src/shop.html");
		else errorMessage.innerHTML = "<br><br>Contraseña incorrecta<br>";
	}
	else errorMessage.innerHTML = "<br><br>Usuario incorrecto<br>";

}

function userExists(user)
{
	if (users[user] != undefined)
		return true;
	else return false;
}

function encrypt(password)
{
	let fibCount = 1, fibX = 0, fibY = 1;
	let boundaries = "AZaz09";
	let ret = "", newChar;
	for (let i = 0; i < password.length; i ++)
	{
		if (password.charCodeAt(i) >= boundaries.charCodeAt(0) && password.charCodeAt(i) <= boundaries.charCodeAt(1))
		{
			newChar = String.fromCharCode((password.charCodeAt(i) + fibCount) % (boundaries.charCodeAt(1) + 1));
			if (newChar.charCodeAt(0) < boundaries.charCodeAt(0)) 
				newChar = String.fromCharCode(newChar.charCodeAt(0) + boundaries.charCodeAt(0));
		}

		else if (password.charCodeAt(i) >= boundaries.charCodeAt(2) && password.charCodeAt(i) <= boundaries.charCodeAt(3))
		{
			newChar = String.fromCharCode((password.charCodeAt(i) + fibCount) % (boundaries.charCodeAt(3) + 1));
			if (newChar.charCodeAt(0) < boundaries.charCodeAt(2)) 
				newChar = String.fromCharCode(newChar.charCodeAt(0) + boundaries.charCodeAt(2));
		}

		else if (password.charCodeAt(i) >= boundaries.charCodeAt(4) && password.charCodeAt(i) <= boundaries.charCodeAt(5))
		{
			newChar = String.fromCharCode((password.charCodeAt(i) + fibCount) % (boundaries.charCodeAt(5) + 1));
			if (newChar.charCodeAt(0) < boundaries.charCodeAt(4)) 
				newChar = String.fromCharCode(newChar.charCodeAt(0) + boundaries.charCodeAt(4));
		}
		else newChar = password[i];

		fibCount = fibX + fibY;
		fibX = fibY;
		fibY = fibCount;

		ret += newChar;
	}
	return ret;
}