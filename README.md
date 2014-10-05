PHPuiGradients
==============

[PHPuiGradients](https://github.com/cecilomar/PHPuiGradients) takes a random combination of colors that are stored in a jSon file. The script also generates CSS code that can be embedded in a website.

The ever growing database of beautiful color combinations has been created by [Indrashish Ghosh](https://github.com/Ghosh) in his project: [uiGradients](https://github.com/Ghosh/uiGradients). He also created a website where you can browse all the color combinations: http://uigradients.com/

##Features List:

###Current
 * Generates random colors horizontal radient CSS.
 * CSS code is compatible with Chrome 10+, Saf5.1+, FF3.6+, IE10, Opera 11.10+ and W3C Compliant.
     	
###To Do
* Create templates for different types of backgrounds.
 * Horizontal
 * Vertical
 * Circular
 * Diagonal (Top Left/Right, Bottom Left/Right, or Random)
* Choose a type of background (horizontal, vertical, circular, diagonal)
* Randomnize the type of background.


##Usage:
This project is just starting, so there are not at lot of things you can do with it yet. For now you can just run the function and it should work if you didn't touch anithing.
###Basic
```php
<?php
// If you are going to use this script to create a CSS document and link it to an HTML document
// it's recomented to add a PHP header so it can be recognized as CSS by the web browser. 
header("Content-type: text/css");

// Include the main file
include "phpuigradients.php";

// That's all you need
PHPuiGradients();
?>
```
###CSS Selector 
```php
// Tag
PHPuiGradients('body');

// Class
PHPuiGradients('.top');

// ID
PHPuiGradients('#bottom');

// Other CSS Selectors
PHPuiGradients('a[href^="https"], body, top, #bottom');
```
###Output (CSS or PHP Variables)
```php
// CSS Output is on by default
PHPuiGradients('body', true);

// For PHP Variables add false
$colour = PHPuiGradients('body', true);

// Or it can be used in combination
// This will give you the PHP variables and print the CSS code
$colour = PHPuiGradients('body');
```

## Libraries:
 * [uiGradients](https://github.com/Ghosh/uiGradients): Already mentioned, but just in case, this is where the colors come from.