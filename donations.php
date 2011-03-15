<?php

require_once 'functions.php';

echo headers( 'a5p', 'Hackspace Donations' );
echo box( 'Hackspace donations', <<<HTML
	<p>This donations tin is for contributions towards the running of the hackspace.</p>
	<p>Please do not take money from this donations tin, it should be paid in to the hackspace bank account on a regular basis only.</p>
	<p style="font-weight: bold;font-size: 150%;">This donations tin is not for purchasing drinks.</p>
HTML
, '#ffc', '#ff6' );
echo box( 'Accepted tender', <<<HTML
				<p>All denominations of pound sterling are accepted.</p>
				<p>Please do not donate foreign currency.</p>
HTML
, '#ddd', '#555', '#fff' );
echo footer();
