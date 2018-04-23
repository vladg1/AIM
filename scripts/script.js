function showMSG() {
	alert('Hy');
}

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


function myFunction() {
    document.getElementById("demo").style.color = "green";
}



var status = "less";

function toggleText()
{
    var text="<br>Bulgarian: 45 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDutch: 10 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRomanian: 4 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total</b>: 59 ";
    
    if (status == "less") {
        document.getElementById("textArea").innerHTML=text;
        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea").innerHTML = "";
        status = "less"
    }
}


function toggleText2()
{
    var text="<br>Bulgarian: 45 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDutch: 10 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRomanian: 4 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total</b>: 59";
    
    if (status == "less") {
        document.getElementById("textArea2").innerHTML=text;

        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea2").innerHTML = "";

        status = "less"
    }
}

function toggleText3()
{
    var text="<br>Bulgarian: 45 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDutch: 10 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRomanian: 4 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total</b>: 59";
    
    if (status == "less") {
        document.getElementById("textArea3").innerHTML=text;

        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea3").innerHTML = "";

        status = "less"
    }
}


function toggleText4()
{
    var text="<br>Bulgarian: 45 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspDutch: 10 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspRomanian: 4 students&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>Total</b>: 59";
    
    if (status == "less") {
        document.getElementById("textArea4").innerHTML=text;

        status = "more";
    } else if (status == "more") {
        document.getElementById("textArea4").innerHTML = "";

        status = "less"
    }
}



function loadInfo(fileName){

	// Check the value of the "fileName" variable
	// if the value is NULL, then set the value to "home.txt"
	// otherwise keep the original value
	fileName = fileName || "home.txt";
	
	// Based on the value of the "fileName" variable
	// if the value is "home.txt"
	// set the className of the "Home" menu element to active
	// and remove the className of the "About" menu element
	if(fileName == "home.txt"){
		document.getElementById("home").className = 'active';
		document.getElementById("about").className = '';
	}
	// here we do the opposite
	else if (fileName == "about.txt"){
		document.getElementById("home").className = '';
		document.getElementById("about").className = 'active';
	}
	// if the value of the "fileName" variable is neither "home.txt" nor "about.txt"
	// we are not going to do anything, so we do return
	else{
		
		return;
	}
	
	// Create XMLHttpRequest instance, more info: https://www.w3schools.com/xml/xml_http.asp
	var xhttp = new XMLHttpRequest();

	// The "onreadystatechange" property specifies a function to be executed 
	// every time the status of the XMLHttpRequest object changes
	xhttp.onreadystatechange = function(){
		// when readyState property is 4 and the status property is 200, 
		// the response is ready, more info: https://www.w3schools.com/xml/ajax_xmlhttprequest_response.asp
		if(this.readyState == 4 && this.status == 200){
			// Here we do find the content placeholder into which the retrieved data will be set
			document.getElementById("place").innerHTML = this.responseText;
		}
	};
	
	// Here we do specify the XMLHttpRequest object
	// 1st parameter: method the HTTP method to use, such as "GET", "POST", "PUT", "DELETE", etc.
	// 2nd parameter: the URL of the file that is requested
	// 3rd parameter (optional): an optional boolean parameter, defaulting to true, 
	// 	indicating whether or not to perform the operation asynchronously 
	// more info: https://developer.mozilla.org/nl/docs/Web/API/XMLHttpRequest
	xhttp.open("GET", fileName, true);
	
	// finally we do send the request
	// when the request is sent and the XMLHttpRequest object changes, 
	// aforementioned "onreadystatechange" method will be called
	xhttp.send();
}

// When document is loaded call "loadInfo" method
(function() {
	this.loadInfo();
})();