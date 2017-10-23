var displayArea;
var toggleButton;
var resetButton;
var hours = 0;
var minutes = 0;
var seconds = 0;
var milliseconds = 0;
var running = false;
var startTime;
var curTime = 0;
var savedTime = 0;
window.addEventListener("load", init);
var tick;


function init() {
	displayArea = document.getElementById("display-area");
	toggleButton = document.getElementById("toggle-button");
	toggleButton.addEventListener("click", toggleTimer);
	resetButton = document.getElementById("reset-button");
	resetButton.addEventListener("click", resetTimer);
}

function toggleTimer() {
	if (!running) {
		console.log("Start timer");
		startTime = new Date() - savedTime;
		tick = window.setInterval(tickFunction, 1);
		running = true;		
	}
	else {
		console.log("Stop timer");
		window.clearInterval(tick);
		savedTime = curTime;
		running = false;
		}
	
}

function resetTimer() {
	console.log("Reset timer");
	updateDisplay();
	startTime = new Date();
	savedTime = 0;
	displayArea.innerHTML = "00:00:00:000"
	}

function updateDisplay() {
	displayArea.innerHTML = (twoDigit(hours) + ":" + twoDigit(minutes) + ":" + twoDigit(seconds) + ":" + threeDigit(milliseconds)); 
}

function tickFunction() {
	curTime = new Date() - startTime;
	milliseconds = parseInt(curTime % 1000)
	seconds = parseInt(curTime / 1000) % 60
	minutes = parseInt(curTime / 1000 / 60) %60
	hours = parseInt(curTime / 1000 / 60 / 60)
	updateDisplay();
}

function twoDigit(num) {
	if (num < 10) {
		return ("0" + num);
	}
	return num;
}

function threeDigit(num) {
	if (num < 10) {
		return ("00" + num);
	}
	else if (num < 100) {
		return ("0" + num);
	}
	return num;
}







