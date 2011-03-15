<?php

require_once 'functions.php';

echo headers( 'a3p', 'Laboratory 24: Unit 24, Cremer Business Centre, 37 Cremer Street, London, E2 8HD' );
echo '<div id="left">';
echo box( 'Locking up', <<<HTML
				<ul>
					<li>Check that any food is in the bin and all of the washing up is done.</li>
					<li>All equipment is switched off except Babbage, especially:<ul>
						<li>Soldering irons</li>
						<li>Heaters</li>
						<li>the Makerbot</li>
						<li>Workstation computers</li>
					</ul></li>
					<li>Lock both the rear doors.</li>
					<li>Close all the windows (rear windows of unit 24, front windows of unit 23, and those in the toilets).</li>
				</ul>
HTML
, '#ffc', '#ff6' );
echo box( 'Space technology', <<<HTML
				<p>Use of technology that the space provides is at your own risk.</p>
				<p>We offer various safety equipment (eye protection, disposable gloves, etc.) and strongly advise you to make use of it.</p>
				<p style="font-weight: bold;">Before using any item of heavy machinery you should request instruction on the correct and proper way to use it, and of any safety precautions that you need to take.  We encourage you to do this for your own safety and the safety of others using the space.  In particular we require you to seek induction before using the:</p>
				<ul style="font-weight: bold;">
					<li>Laser cutter,</li>
					<li>MakerBot,</li>
					<li>Milling machine,</li>
					<li>Lathe,</li>
					<li>Band saw,</li>
					<li>Bench grinder,</li>
					<li>or Mig welder.</li>
				</ul>
HTML
, '#ddd', '#555', '#fff' );
echo box( 'Emergency contacts', <<<HTML
				<dl>
					<dt>Jonty</dt>
					<dd>07793 223 857</dd>
				</dl>
				<dl>
					<dt>Russ</dt>
					<dd>07799 027 946</dd>
				</dl>
				<dl>
					<dt>Charles</dt>
					<dd>07733 223 902</dd>
				</dl>
				<dl>
					<dt>Alex</dt>
					<dd>07525 909 332</dd>
				</dl>
				<dl>
					<dt>Andy</dt>
					<dd>07790 449 034</dd>
				</dl>
				<dl>
					<dt>Robert</dt>
					<dd>07969 494 841</dd>
				</dl>
				<div class="clear"></div>
HTML
, '#9cf', '#039', '#fff' );
echo '</div><div id="right">';
echo box( 'Fire safety', <<<HTML
				<p style="font-style: italic; text-align: center;">Rule 0: Try not to be on fire.</p>
				<p>There is an alarm point to the right as you leave the front of the space.</p>
				<div style="margin-right: 10px;" class="extinguisher">
					<h3 style="background-color: blue; color: white;">Dry Powder</h3>
					<p>All fires except:<br> combustible metals, <br>cooking fat and oil.</p>
					<p style="font-weight: bold;">Use if in doubt.</p>
				</div>
				<div class="extinguisher">
					<h3 style="background-color: black; color: white;">Carbon Dioxide</h3>
					<p>For use on:<br> flammable liquids,<br> electrical fires.</p>
				</div>
				<div class="extinguisher">
					<h3 style="background-color: red; color: white;">Blanket</h3>
					<p>Smothering small fires.</p>
				</div>
				<p style="font-weight: bold; margin-bottom: 0;">Fire extinguishers:</p>
				<ul style="margin-top: 0;">
					<li><strong>Blanket:</strong> Kitchen, above the dishwahser.</dd>
					<li><strong>Dry powder:</strong> Dirty shop, near the entrance to the lobby.</li>
					<li><strong>Carbon dioxide:</strong> Lobby, near the entrance to the dirty shop.</li>
				</ul>
				<div style="clear:both;"></div>
				<p style="font-weight: bold;margin-bottom: 0;">Fire escapes:</p>
				<ul style="margin-top:0;">
					<li>Front door of unit 24 (stairs on the left and right)</li>
					<li>Rear door of unit 24 (stairs at the end of the balcony)</li>
					<li>Rear door of unit 23 (stairs at the end of the balcony)</li>
				</ul>
				<p>The designated meeting point is in the business centre car park.</p>
				<p>A fire alarm call point is located to the right of the front doors, however this is not connected to an emergency services autodialer.</p>
				<div class="clear"></div>
HTML
, '#f99', '#c33', '#fff' );
echo box( 'First aid', <<<HTML
				<p>A first aid kit and an eye bath kit is located above the sink in the dirty shop.</p>
				<p>Use of this equipment is <span style="text-decoration: underline;">at your own risk</span>, our insurance does not cover its use.</p>
HTML
, '#9f9', '#064', '#fff' );
echo '</div>';
echo footer();
