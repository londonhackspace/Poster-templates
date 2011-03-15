<?php

require_once 'functions.php';

echo headers( 'a3l', 'Members Item Storage' );
echo box( 'Members storage', <<<HTML
				<p style="font-weight: bold;">Members are allowed to store one standard sized box worth of belongings in the space.</p>
				<ul>
					<li>Do not take items from boxes that belong to someone else without explicit permission.</p>
					<li>Ensure that your box is clearly labelled on the front.</li>
					<li>Please try to keep boxes completely closed so they can be safely moved if required.</li>
				</ul>
HTML
, '#ffc', '#ff6' );
echo box( 'Larger items', <<<HTML
				<p style="font-weight: bold;">Please do not store larger objects in the space without seeking permission on the mailing list or IRC.</p>
				<ul>
					<li>We are generally limited on space, so it is better if larger items are not kept at the space.</li>
					<li>Any larger items that are given storage permission should be clearly labelled.</li>
					<li>Items outside of boxes that are not labelled are likely to be moved to the disposal system.</li>
				</ul>
HTML
, '#ddd', '#555', '#fff' );
echo footer();
