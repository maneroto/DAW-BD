setupInputs();

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