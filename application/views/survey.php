<?php

?>

<html>
<head>
	<title>Survey Form</title>
	
<link rel="stylesheet" href="./assets/css/skeleton.css">

</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="one-half column offset-by-three column">
	<form id="myform" action="surveys/process_form" method="post">

	 <p><label>Your Name:<label><span><input type ="text" name="yourname"><br></span></p>
	 <p><label>Dojo Location:<label><span><select name="dojo">
	 					<option value="Please Select">Please Select</option>
	 					<option value="San Jose">San Jose</option>
	 					<option value="Seattle">Seattle</option>
	 					<option value="SoCal">So CAl</option>
	 					</select><br></span></p>
	 <p><label>Comments:</label><span><textarea name="comments"> </textarea></span></p>
	 <input id="button" type ="submit" name="action" value="Submit!">
	 <input type="hidden" name ="action" value="submit_dojo">
	</form>
</div>
</div>

</body>
</html>