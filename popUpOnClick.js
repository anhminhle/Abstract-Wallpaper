// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

var pictures = document.getElementById("pictures");
var figures = pictures.getElementsByClassName("picture-1")
var imgs = pictures.getElementsByTagName("img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
var loader = document.getElementById("loader");

Array.from(figures).forEach(function(figure, i) {	
	figure.onclick = function(){
		loader.style.opacity = "1";			//loader appear on screen
		loader.style.zIndex = 1;			//loader jump in front of image
	    setTimeout(function(){
	    	modal.style.display = "block";
		    loader.style.opacity = "0";		//hide loader
		    loader.style.zIndex = -1;
		   	modalImg.src = imgs[i].src;
	    	captionText.innerHTML = imgs[i].alt;
	    }, 1000);
	};
});

/*
Array.from(imgs).forEach(function(img, i) {	
	img.onclick = function(){
		loader.style.opacity = "1";
	    setTimeout(function(){
	    	modal.style.display = "block";
		    loader.style.opacity = "0";
		   	modalImg.src = img.src;
	    	captionText.innerHTML = img.alt;
	    }, 1000);
	};
});
*/

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 
