<?php

?>
<html>
<head>
	<title>This is the results page</title>
	<link rel="stylesheet" href="./assets/css/skeleton.css">

<style>
.thankyou {

	background-color: green;
	color:white;
	width:300px;
	text-align: center;
}

.formresults {
	background-color: white;
	color: black;
}

.button {
	text-align: right;
}
</style>
</head>
<body>
 	<div class="container">
 		<div class="row ">
 			<div class="one-half column offset-by-three column thankyou">
 			Thanks for submitting this form! <br>you have submitted this form <?=$counter?> times now.
 		</div>
 	</div>

 		<div class="row formresults">
 			<div class="one-half column offset-by-three column">
 				<h3>Submited Information</h3>
					Name:<?=$yourname."<br> Dojo Location: ". $dojo." <br>Comments: ".$comments?>
					<p><a href="/surveys/goback/"><button>Go Back</button></a></p>
				</div>
		</div>

 </div>

</body>
</html>