function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var text_id = "txtColor";
	var form = document.getElementById(text_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	var color = form.value;

	div.style.backgroundColor = color;
}