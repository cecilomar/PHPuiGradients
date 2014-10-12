<?php

// Create the function
function PHPuiGradients($selector='.PHPuiGradients', $css=true, $template='horizontal'){
	// The default values are on the function.

	// If you want to print the CSS code
	if($css){

		// Load and parse jSon into Array()
		$uiGradients = json_decode(file_get_contents('./lib/uiGradients/gradients.json'), true);

		// Get a random color combination
		$randGradient = $uiGradients[array_rand($uiGradients)];

		// Randomize which color goes first.
		if(rand(0,1)){
			$color1 = $randGradient['colour1'];
			$color2 = $randGradient['colour2'];
		}else{
			$color1 = $randGradient['colour2'];
			$color2 = $randGradient['colour1'];

		}
		
		// Load CSS Template
		
		// To do: This is probably going to be the hardest part to do. Is really not that bad but I'll do it at the end.
		// For now is only going to generate a horizontal gradient.

		// Generate CSS Code
		// This part is to be removed once the template part is ready.

		?><?=$selector;?> {
	/* <?=$randGradient['name'];?> */
	background: -webkit-linear-gradient(90deg, <?=$color1;?> 10%, <?=$color2;?> 90%); /* Chrome 10+, Saf5.1+ */
	background:    -moz-linear-gradient(90deg, <?=$color1;?> 10%, <?=$color2;?> 90%); /* FF3.6+ */
	background:     -ms-linear-gradient(90deg, <?=$color1;?> 10%, <?=$color2;?> 90%); /* IE10 */
	background:      -o-linear-gradient(90deg, <?=$color1;?> 10%, <?=$color2;?> 90%); /* Opera 11.10+ */
	background:         linear-gradient(90deg, <?=$color1;?> 10%, <?=$color2;?> 90%); /* W3C */
}

<?php
	}

	// Return the colour variables
	return array(
		'color1' => $color1,
		'color2' => $color2
		);

// End of the PHP function
}
print_r($randGradient);
?>