<?php
/*
 * Helper Functions definition
 *
 */

function PrettyPrint($content) {
	if($content !== NULL) {
		echo '<pre>';
		print_r($content);
		echo '</pre>';	
	}
}

function ShowNotices() {
	if(DEBUG) 
		PrettyPrint($GLOBALS['Notices']);
}
