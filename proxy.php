<?php
	header( 'content-type: application/json' );
	$url = $_GET['url'];
	echo file_get_contents( $url );