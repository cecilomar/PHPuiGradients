<?php

// Create the function
function PHPuiGradients($selector='.PHPuiGradients', $css=true, $template='horizontal'){
	// The default values are on the function.


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
		$templateData = file_get_contents($templateLocation);
	}else{
		// If the template does not exists, will print this message
		$templateData = '/* no template */';
	}

	// Replace ".PHPuiGradients" with "$selector".
	$templateData = str_ireplace('.PHPuiGradients', $selector, $templateData);

	// Replace colors.
	$templateData = str_ireplace('#000000', $color1, $templateData);
	$templateData = str_ireplace('#FFFFFF', $color2, $templateData);

	// Replace 999deg for a random number between 0-359.
	// To Do: Replace any degree over 360 to a random number. Not just 999
	$templateData = str_ireplace('999deg', rand(0,359).'deg', $templateData);

	// Minimize (compress) the CSS code
	$phpminimizeloc = './lib/phpMinimize/phpminimize.php';
	if(file_exists($phpminimizeloc)){
		include $phpminimizeloc; // <= Comment this line of you don't want to compress the CSS code.
		if(function_exists(phpMinimize)){
			$templateData = phpMinimize($templateData);
		}
	}

	// If you want to print the CSS code
	if($css){
		// The final product.
		echo $templateData;
	}

	// Return the colour variables
	return array(
		'color1' => $color1,
		'color2' => $color2,
		'css' => $templateData
		);

// End of the PHP function
}

?>