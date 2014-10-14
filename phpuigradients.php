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
		
		// Create CSS Template Location
		$templateLocation = './templates/' . $template. '.css';

		// Check if the template exists.
		if(file_exists($templateLocation)){
			$template = file_get_contents($templateLocation);
		}else{
			// If the template does not exists, will print this message
			$template = '/* no template */';
		}

		// Replace ".PHPuiGradients" with "$selector".
		$template = str_ireplace('.PHPuiGradients', $selector, $template);

		// Replace colors.
		$template = str_ireplace('#000000', $color1, $template);
		$template = str_ireplace('#FFFFFF', $color2, $template);

		// The final product.
		echo $template;

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