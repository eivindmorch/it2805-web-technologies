var listContent;
var textField;
var addButton;
var deleteCompletedButton;

window.onload = init;

function init() {
	listContent = document.getElementById("listContent");	
	textField = document.getElementById("textField");
	textField.addEventListener("keypress", function(e){
		if (e.keyCode ==13) {
			addItem();
		}
	});
	addButton = document.getElementById("addButton");
	addButton.addEventListener("click", addItem);
	deleteCompletedButton = document.getElementById("deleteCompletedButton");
	deleteCompletedButton.addEventListener("click", deleteCompletedItems);
}

function addItem() {
	if (textField.value !="") {
		listContent.innerHTML += "<label><input type='checkbox'>" + textField.value + "<br/>" + "</label>";
		textField.value="";
		textField.focus();
	}
}

function deleteCompletedItems() {
	var checkBoxes = listContent.getElementsByTagName("input");
	for (i=0; i<checkBoxes.length; i++){
		var checkbox = checkBoxes[i];
		if (checkbox.checked){
			checkbox.parentNode.parentNode.removeChild(checkbox.parentNode);
			i-=1;
		}
	}	
	textField.focus();
}