<?php

require_once 'functions.php';

echo headers( 'a5p', 'Drinks Donations', false );
echo <<<HTML
<style>
</style>
HTML;
echo box( 'Drinks donations', <<<HTML
				<p>This donations box is for contributions towards drinks kept in the hackspace fridge (soft drinks, beers, spirits, etc.).</p>
				<p>Please place donations towards the hackspace or other consumables in the donations box designated for them.</p>
HTML
, '#ffc', '#ff6' );
echo box( 'Accepted tender', <<<HTML
				<p>The following tender is accepted for drinks donations:</p>
				<img src="50p.png" width="75" height="75">
				<img src="&pound;1.png" width="50" height="54">
				<img src="&pound;2.png" width="75" height="73"><br>
				<img src="&pound;5.jpg" width="180" height="96" style="margin-right:5px;">
				<img src="&pound;10.jpg" width="180" height="96" style="margin-right:5px;">
				<img src="&pound;20.jpg" width="180" height="96" style="margin-right:5px;">
				<img src="&pound;50.jpg" width="180" height="96" style="margin-right:5px;">
				<p>Other denominations will be moved to the general hackspace donations.</p>
HTML
, '#ddd', '#555', '#fff' );
echo footer();
