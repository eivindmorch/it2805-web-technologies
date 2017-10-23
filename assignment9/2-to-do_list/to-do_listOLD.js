var listContent;
var textField;
var addButton;
var deleteCompletedButton;
var itemList = new Array();

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
		itemList.push(["<input type='checkbox'>", textField.value]);
		textField.value="";
		updateListContent();
	}
}

function deleteCompletedItems() {
	for (i=0; i<itemList.length; i++) {
		console.log(itemList[i]);
		if (itemList[i][0].checked) {
			consolel.log("ja");
			itemList.splice(i,1);
		}
	}
	updateListContent();
}

function updateListContent() {
	listContent.innerHTML="";
	for (i=0 ; i<itemList.length ; i++) {
		listContent.innerHTML += "<label>" + itemList[i][0] + "" + itemList[i][1] + "<br/>" + "</label>";
	}
}
