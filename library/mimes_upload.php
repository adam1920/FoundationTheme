<?php
add_filter('upload_mimes', 'foundation_upload_mimes');
function foundation_upload_mimes ( $existing_mimes=array() ) {
 	// add your extension to the array
 	$existing_mimes['svg'] = 'image/svg+xml';
 	// add as many as you like
 	// removing existing file types
 	//unset( $existing_mimes['exe'] );
 	// add as many as you like
 	// and return the new full result
 	return $existing_mimes;
}
