//added inline js to own file

$.ajax({
	url:"https://api.nasa.gov/planetary/apod?api_key=f1NN7ANpqHGvZkORKVl5H8jvXxgAGk9jpWMOOhx0",
	success: function(whatyougot){
		document.getElementById("img").innerHTML="<img src='" +whatyougot.url+"'style='width:50%;'/>";
		document.getElementById("copyright").innerHTML="<By "+whatyougot.copyright;
		document.getElementById("title").innerHTML=whatyougot.title;
		document.getElementById("explanation").innerText=whatyougot.explanation;
	}
});