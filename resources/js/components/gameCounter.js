import Axios from "axios";

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
	countDisplay();
	insertRequest(counter);
}

function insertRequest(score)
{
	const nama = document.getElementById('nama').value;
	const hp= document.getElementById('hp').value;
	
	Axios.post('/api/insertScore', {
		nama:nama,
		hp:hp,
		score:score
	}).then(() => {

	}).catch((error) => {
		console.log(error.response.data)
	});

	/*
	const formData = new FormData();
	formData.append('nama', namaSes.value);
	formData.append('hp', hpSes.value);
	formData.append('score', score);

	
	const xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function()
        {
            if(xmlHttp.readyState == 4 && xmlHttp.status == 200)
            {
                console.log(xmlHttp.responseText);
            }
        }
		xmlHttp.open("POST", "/insertScore");
		xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlHttp.setRequestHeader('X-CSRF-Token', token);
		xmlHttp.send(formData); 	
		*/
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