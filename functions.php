<?php

function headers( $size, $subheader, $header = true ) {
	switch( $size ) {
		case 'a5p':
			$width = 100;
			$height = 100;
			break;
		default:
			$width = 150;
			$height = 150;
	}
	$r = <<<HTML
<!doctype html>
<html>
	<head>
		<link rel="stylesheet" href="hackspace.css">
	</head>
</html><body><div id="$size">
HTML;
	if( $header ) {
		$r .= <<<HTML
		<div id="header">
			<object id="logo" data="logo.svg" width="$width" height="$height"></object>
			<h1>London<br> Hackspace</h1>
			<div class="clear"></div>
		</div>
HTML;
	}
	return <<<HTML
$r
		<div id="subheader">$subheader</div>
HTML;
}

function footer() {
	return <<<HTML
	</div></body>
</html>
HTML;
}

function box( $title, $body, $fill, $header, $header_text = '#000' ) {
	return <<<HTML
			<div class="box" style="background-color: $fill;">
				<h2 style="background-color: $header; color: $header_text;">$title</h2>
				$body
			</div>
HTML;
}
