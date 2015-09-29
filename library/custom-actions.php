<?php

/* my_body */
function my_body() {
        do_action('my_body');
}
add_action('my_body', 'my_body_function', 1);
function my_body_function(){
        echo <<<HTML
HTML;
}
/* END my_body */

add_action('foundation_credits', 'foundation_credits_func');
function foundation_credits_func(){
	$output  = '<a href="http://foundationtheme.tadam.co.il/">'.__('The Foundation Theme','foundation').'</a>';
	echo $output;
}
