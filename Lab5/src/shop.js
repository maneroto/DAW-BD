actualiceMaxUnits();
setInputs();

function setInputs()
{
	let acceptUnits = document.querySelectorAll(".acceptItems");
	let selectors = document.querySelectorAll(".unitSelector");
	for (let i = 0; i < acceptUnits.length; i ++)
	{
		acceptUnits[i].addEventListener("click", function()
			{
				addToCart(i);
				actualiceMaxUnits();
			});
		selectors[i].addEventListener("input", function()
			{
				bounceToBoundary(i, this);
			});
	}
}
function actualiceMaxUnits()
{
	let selectors = document.querySelectorAll(".unitSelector");
	let htmlUnitsInStock = document.querySelectorAll("span.itemsInStock");
	let unitsInStock = [];
	for(let i = 0; i < selectors.length; i ++)
	{
		unitsInStock.push(htmlUnitsInStock[i].innerHTML);
		selectors[i].max = unitsInStock[i];
		bounceToBoundary(i, selectors[i]);
	}
}
function bounceToBoundary(position, selector)
{
	if (!isNaN(selector.value))
	{
		let unitsInStock = document.querySelectorAll("span.itemsInStock");
		unitsInStock = parseInt(unitsInStock[position].innerHTML);
		if (parseInt(selector.value) > unitsInStock)
		{
			selector.value = unitsInStock;
		}
		else if (parseInt(selector.value) < 0)
		{
			selector.value = 0;
		}
	}
}
function addToCart(position)
{
	let unitsSelected = document.querySelectorAll(".unitSelector");
	unitsSelected = parseInt(unitsSelected[position].value);
	let unitPrice = document.querySelectorAll(".unitPrice");
	unitPrice = parseInt(unitPrice[position].innerHTML);
	let total = document.querySelector("#totalToPay");
	if (!isNaN(unitsSelected))
	{
		total.innerHTML = parseInt(total.innerHTML) + unitsSelected * unitPrice;
		removeFromStock(position, unitsSelected);
	}
}
function removeFromStock(position, units)
{
	let unitsInStock = document.querySelectorAll("span.itemsInStock");
	unitsInStock = unitsInStock[position];
	unitsInStock.innerHTML = parseInt(unitsInStock.innerHTML) - units;
}