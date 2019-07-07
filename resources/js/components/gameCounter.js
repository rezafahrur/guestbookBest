try{

const countBtn = document.getElementById('button');
const countDisp = document.getElementById('counter');

localStorage.clear();

let counter = 0;

function getCounterState() {
	if ((typeof(Storage)!=="undefined") && (localStorage.sCounter)) {
		counter = Number(localStorage.sCounter);
		countDisplay()
	}
}

function addOne() {
	counter++;
	if (typeof(Storage)!=="undefined") {
		localStorage.sCounter = counter;
	}
	countDisplay()
}

function countDisplay() {
    countDisp.innerHTML = counter;
}

window.addEventListener('load', getCounterState);
countBtn.addEventListener('click', addOne);


}
catch
{

}