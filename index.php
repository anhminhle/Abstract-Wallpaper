<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">	
	<link rel="stylesheet" type="text/css" href="popUpOnClick.css">	
	<link rel="stylesheet" type="text/css" href="loader.css">
	<link rel="stylesheet" type="text/css" href="btn.css">
	<title>Image and title with scale/rotate effect on hover (Abstract Wallpapers)</title>
</head>
<body>
	<header>
		<h1>Abstract Wallpapers</h1>
		<p>
			Prefer size: 1920 * 1080
		</p>
	</header>

	<!-- The Modal -->
	<div id="myModal" class="modal">

	  <!-- The Close Button -->
	  <span class="close">&times;</span>

	  <!-- Modal Content (The Image) -->
	  <img class="modal-content" id="img01">

	  <!-- Modal Caption (Image Text) -->
	  <div id="caption"></div>
	</div> 

	<!-- Input Form -->
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
		<!-- buttons -->
		<div class="buttons">
			<input id="imgUpload" type="file" name="image"></input> <br>
			Title1: <input  type="text" name="title1"></input> <br>
			Title2: <input  type="text" name="title2"></input> <br>
			Title3: <input type="text" name="title3"></input> <br>
			<label class="btnOnHover">Submit
				<input id="imgSubmit" type="submit" name="submit" value="submit"></input>
			</label>
		</div>
	</form>

	<div id="pictures">
		<figure class="picture-1">
			<img src="dark_patterns_background_circles_81405_1920x1080.jpg" alt="Picture1"/>
			<figcaption>
				<h3 class="title1">Dark</h3>
				<h3 class="title2">Background</h3>
				<h3 class="title3">Circle</h3>
			</figcaption>
		</figure>
		<figure class="picture-1">
			<img src="code_coding_binary_code_abstract_patterns_112140_1920x1080.jpg" alt="Picture2"/>
			<figcaption>
				<h3 class="title1">Code</h3>
				<h3 class="title2">Coding</h3>
				<h3 class="title3">Binary code</h3>
			</figcaption>
		</figure>
		<figure class="picture-1">
			<img src="background_spots_lines_bright_multi-colored_86975_1920x1080.jpg" alt="Picture3"/>
			<figcaption>
				<h3 class="title1">Background</h3>
				<h3 class="title2">Spots lines</h3>
				<h3 class="title3">Multi-colored</h3>
			</figcaption>
		</figure>
		<figure class="picture-1">
			<img src="light_faded_background_85547_1920x1080.jpg" alt="Picture4"/>
			<figcaption>
				<h3 class="title1">Light</h3>
				<h3 class="title2">Faded</h3>
				<h3 class="title3">Background</h3>
			</figcaption>
		</figure>
		<figure class="picture-1">
			<img src="triangle_light_blurred_88541_1920x1080.jpg" alt="Picture5"/>
			<figcaption>
				<h3 class="title1">Triangle</h3>
				<h3 class="title2">Light</h3>
				<h3 class="title3">Blurred</h3>
			</figcaption>
		</figure>
		<figure class="picture-1">
			<img src="rotation_light_background_dark_91673_1920x1080.jpg" alt="Picture6"/>
			<figcaption>
				<h3 class="title1">Rotation</h3>
				<h3 class="title2">Light</h3>
				<h3 class="title3">Background</h3>
			</figcaption>
		</figure>
	</div>
	
	<!-- Upload image to database -->
	<?php
		$imageLink = $title1 = $title2 = $title3 = "";
		$imageErr = $title1Err = $title2Err = $title3Err = "";
		if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if (!empty($_POST["image"])){
				$imageLink = $_POST["image"];
			}else{
				$imageErr = "Image required";
			}
			if (!$imageErr){
				$title1 = $_POST["title1"];
				$title2 = $_POST["title2"];
				$title3 = $_POST["title3"];
				$form =
					"<figure class='picture-1'>
						<img src=".$imageLink." alt='Picture5'/>
						<figcaption>
							<h3 class='title1'>".$title1."</h3>
							<h3 class='title2'>".$title2."</h3>
							<h3 class='title3'>".$title3."</h3>
						</figcaption>
					</figure>";
				echo $form;
			}
		}
	?>

	<!-- The loader -->
	<div id="loader">
		<div class="svg">
		  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg" x="0px" y="0px" width="150px" height="150px" viewBox="0 0 213.235 241.176" enable-background="new 0 0 213.235 241.176" xml:space="preserve" fill="#0057B8">
		    <path d="M108.581,64.968V14.124l44.007,25.422L108.581,64.968"/>
		    <path fill-opacity="0.9" d="M153.591,92.101V41.258L109.582,66.68L153.591,92.101"/><path d="M155.586,92.062V41.221l44.009,25.42L155.586,92.062"/><path fill-opacity="0.7" d="M200.299,119.14V68.297l-44.004,25.421L200.299,119.14"/><path fill-opacity="0.85" d="M155.586,146.255V95.412l44.009,25.422L155.586,146.255"/><path fill-opacity="0.7" d="M200.299,173.35v-50.844l-44.004,25.422L200.299,173.35"/><path fill-opacity="0.6" d="M155.586,200.482v-50.84l44.009,25.417L155.586,200.482"/><path fill-opacity="0.5" d="M153.591,200.521v-50.84l-44.009,25.418L153.591,200.521"/><path fill-opacity="0.6" d="M108.581,227.696v-50.844l44.007,25.421L108.581,227.696"/><path fill-opacity="0.5" d="M106.62,227.696v-50.844l-44.005,25.421L106.62,227.696"/><path fill-opacity="0.7" d="M61.562,200.553V149.71l44.007,25.423L61.562,200.553"/><path fill-opacity="0.7" d="M59.709,200.56v-50.843l-44.008,25.422L59.709,200.56"/><path fill-opacity="0.7" d="M14.699,173.467v-50.843l44.01,25.42L14.699,173.467"/><path fill-opacity="0.5" d="M59.709,146.235V95.392l-44.008,25.42L59.709,146.235"/><path fill-opacity="0.7" d="M14.699,119.141V68.297l44.01,25.421L14.699,119.141"/><path fill-opacity="0.6" d="M59.709,92.101V41.258L15.701,66.68L59.709,92.101"/><path fill-opacity="0.85" d="M61.562,92.092V41.249l44.007,25.419L61.562,92.092"/>
		    <path fill-opacity="0.9" d="M106.62,64.968V14.124L62.614,39.546L106.62,64.968"/>
		  </svg>
	 	</div>
	</div>

	<script src="popUpOnClick.js" type="text/javascript"></script>
</body>
</html>