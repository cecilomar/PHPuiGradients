<?php

// This is where all the CSS templates are to be stored.
// To add a custom template just create a CSS file under "./templates/customname.css".
// Code it for the class ".PHPuiGradients". This CSS class will be removed and replaced with the CSS selector of your choice.
// Use #FFFFFF for Color #1 and #000000 for Color #2.
// To use you will have to specify it in PHPuiGradients(); <-- Not ready to take templates yet.

// Generate a location for the file.

$selector = 'body';
$templateName = 'horizontal';
$color1 = '#FF0000';
$color2 = '#CCCCCC';


$templateLocation = './templates/' . $templateName. '.css';

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


echo $template;

?>