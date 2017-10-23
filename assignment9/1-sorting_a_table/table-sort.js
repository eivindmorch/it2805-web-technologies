var table;
var sortedList = new Array();
var sortCol = 0;
window.onload=init;

function init() {
	document.getElementById("sort-button-1").addEventListener("click", function(){sort(1)});
	document.getElementById("sort-button-2").addEventListener("click", function(){sort(2)});
	document.getElementById("sort-button-3").addEventListener("click", function(){sort(3)});


	table = document.getElementById("the-table-body");
	
	for (i=0 ; i<table.rows.length ; i++) {
	curRow = table.rows[i];
	sortedList.push([]);
		for (j=0 ; j<curRow.cells.length ; j++) {
			sortedList[i].push(curRow.cells[j].innerHTML);
		}
	}
}

function sort(col) {
	if (col==1) {
		sortCol = 0;
		sortedList.sort(sortByCol);
		updateTable();
	}
	else if (col==2){
		sortCol = 1;
		sortedList.sort(sortByCol);
		updateTable();
	}
	else {
		sortCol = 2;
		sortedList.sort(sortByCol);
		updateTable();
	}
}

function sortByCol(a, b) {
	if (a[sortCol] > b[sortCol]) {
		return 1;
	}
	if (a[sortCol] < b[sortCol]) {
		return -1;
	}
	return 0;
}

function updateTable() {
	for (i=0 ; i < sortedList.length ; i++) {
		for (j=0 ; j < sortedList[i].length ; j++) {
			table.rows[i].cells[j].innerHTML = sortedList[i][j];
		}
	}
}
