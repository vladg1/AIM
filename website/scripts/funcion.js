
var modal = document.getElementById('myModal');

var btn = document.getElementById("myBtn"); 
btn.onclick = function() {
    modal.style.display = "block";
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var a = document.getElementsByClassName('color_change');

_.each(a, (item) => {
	item.addEventListener("click", changeColor);	
})


function changeColor(e) {
	e.target.style.color = "black";
	if (e.target.style.color == "black")
	 {e.target.style.color = "green";}
	else if (e.target.style.color == "green") 
	 {e.target.style.color = "red";}
	
    
} 







// function myFunction() {

//     document.getElementById("demo").style.color = "green";
// }
