function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var text_id = "txtColor";
	var form = document.getElementById(text_id);

	var div_class = "div1";
	var div = document.getElementsByClassName(div_class);

	var color = form.value;

	div.style.backgroundColor = color;
}