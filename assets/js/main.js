function showAlert() {
	
	var title=document.getElementById('titleq').value;
	var desc=document.getElementById('descriptionq').value;

	if(title=='' && desc==''){
		alert("provide both title and description");
	}
	else if(title==''){
		alert("provide suitable title description");
	}
	else if(desc==''){
		alert("provide suitable description");
	}
	else {
		confirm("Are you sure you want to jump to answers page");
	}
	
}
var lclicks=14;
var dclicks=2;
var lcounter=0;
var dcounter=0;
function like(){
	
	document.getElementById("likes").classList.toggle("text-success");
	if(lcounter==0){
	lclicks=lclicks+1;
        document.getElementById("lclicks").innerHTML = lclicks;
        lcounter=1;
	}
	else{
		lclicks=lclicks-1;
		document.getElementById("lclicks").innerHTML = lclicks;
		lcounter=0;
	}
	
}

function dislike(){
	document.getElementById("dislikes").classList.toggle("text-danger");
	if(dcounter==0){
	dclicks=dclicks+1;
        document.getElementById("dclicks").innerHTML = dclicks;
        dcounter=1;
	}
	else{
		dclicks=dclicks-1;
		document.getElementById("dclicks").innerHTML = dclicks;
		dcounter=0;
	}
}
	
        



