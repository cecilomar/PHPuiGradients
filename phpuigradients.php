<?php

// Create the function
function PHPuiGradients(){
	// Code will be here

	// Header so is recognized as a CSS file
	header("Content-type: text/css");

	// Load json into Array
	$uiGradients = json_decode(file_get_contents('./lib/uiGradients/gradients.json'), true);

	// Get a random color combination
	$randGradient = $uiGradients[array_rand($uiGradients)];

	// Generate CSS Code
	?>
	.uiGradients {
		background: -webkit-linear-gradient(90deg, <?=$randGradient['colour1'];?> 10%, <?=$randGradient['colour2'];?> 90%); /* Chrome 10+, Saf5.1+ */
		background:    -moz-linear-gradient(90deg, <?=$randGradient['colour1'];?> 10%, <?=$randGradient['colour2'];?> 90%); /* FF3.6+ */
		background:     -ms-linear-gradient(90deg, <?=$randGradient['colour1'];?> 10%, <?=$randGradient['colour2'];?> 90%); /* IE10 */
		background:      -o-linear-gradient(90deg, <?=$randGradient['colour1'];?> 10%, <?=$randGradient['colour2'];?> 90%); /* Opera 11.10+ */
		background:         linear-gradient(90deg, <?=$randGradient['colour1'];?> 10%, <?=$randGradient['colour2'];?> 90%); /* W3C */
	}

<?php
// This is here to end the PHP function
}

?>