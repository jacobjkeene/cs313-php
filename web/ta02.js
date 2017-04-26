function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_id = "txtColor";
	var textbox = document.getElementById(textbox_id);

	var div_class = "div1";
	var div = document.getElementByClass(div_class);

	var color = textbox.value;
	div.style.backgroundColor = color;
}