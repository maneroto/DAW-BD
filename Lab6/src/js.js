setEvents();
function setEvents()
{
	let mark = document.querySelector("#waterMark");
	mark.addEventListener("mouseover", changeWaterMark);
}

function changeWaterMark()
{
	let mark = document.querySelector("#waterMark");
	mark.style.color = "rgba(250,128,114,0.8)";
}