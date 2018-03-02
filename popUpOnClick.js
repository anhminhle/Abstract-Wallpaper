// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption

var pictures = document.getElementById("pictures");
var imgs = pictures.getElementsByTagName("img");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

Array.from(imgs).forEach(function(img, i) {	
	img.onclick = function(){
	    modal.style.display = "block";
	    modalImg.src = img.src;
	    captionText.innerHTML = img.alt;
	};
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 
