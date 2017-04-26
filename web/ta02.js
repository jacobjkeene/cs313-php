function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var form = document.getElementById("txtColor");

	var div = document.getElementsByClassName("div1");

	var color = form.value;

	div.style.backgroundColor = color;
}