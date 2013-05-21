<?php
include "includes.php";
makeHeader("Table of Contents");
 ?>
 		<?php 
 			$dw = date( "w");
 			if($dw == 1) { //monday
 				?>
 				<p>Welcome to ROFL's Java Programming class!</p>
 				<p>Today's schedule (Monday):</p>
 				<img src="bfbfbfbfbf.gif" alt="" style="display: block; margin-left: auto; margin-right: auto;"/>
 				<ul>
 					<li>9:00am - 11:30am: Work time!</li>
 					<li>11:30am - 1:00pm: Fire drill & Lunch time!</li>
 					<li>1:00pm - 2:30pm: Work time!</li>
 					<li>2:30pm - 3:30pm: Activity time! (Teens: outside! Preteens: inside!)</li>
 					<li>3:30pm - 4:45pm: Work time!</li>
 					<li>4:45pm: Shout-outs, day campers go home.</li>
 				</ul>
 				<?php
 			} elseif ($dw == 2) { //tuesday
 				?>
 				<p>Welcome back!</p>
 				<p>Today's schedule (Tuesday):</p>
 				<img src="tongue.gif" alt="???" style="display: block; margin-left: auto; margin-right: auto;" />
 				<ul>
 					<li>9:00am - 11:45am: Work time!</li>
 					<li>11:45am - 1:00pm: Lunch time!</li>
 					<li>1:00pm - 2:30pm: Work time!</li>
 					<li>2:30pm - 3:30pm: Activity time! (Teen Gaming Tournament! Preteens: outside!)</li>
 					<li>3:30pm - 4:45pm: Work time!</li>
 					<li>4:45pm: Shout-outs, day campers go home.</li>
 				</ul>
 				<?php
 			}
 			elseif ($dw == 3) { //wednesday
 				?>
 				<p>Today's schedule (Wednesday):</p>
 				<img src="programming.gif" alt="PROGRAMMING!" style="display: block; margin-left: auto; margin-right: auto;" />
 				<p>If you haven't already, you should definitely start your final project today!</p>
 				<ul>
 					<li>9:00am - 11:45am: Work time!</li>
 					<li>11:45am - 1:00pm: Lunch time!</li>
 					<li>1:00pm - 2:30pm: Work time!</li>
 					<li>2:30pm - 3:30pm: Activity time! (Teens: outside! Preteens: inside!)</li>
 					<li>3:30pm - 4:45pm: Work time!</li>
 					<li>4:45pm: Shout-outs, day campers go home.</li>
 				</ul>
 				<?php
 			}
 			elseif ($dw == 4) { // thursday
 				?>
 				<p>Today's schedule (Thursday):</p>
 				<img src="headdesk.gif" alt="PROGRAM HARDER" style="display: block; margin-left: auto; margin-right: auto;" />
 				<p>Today is your last full day to work on your project! You should have a <em>silver</em> (finished, working, though possibly unpolished) project by 4:30pm this afternoon.</p>
 				<ul>
 					<li>9:00am - 11:45am: Work time!</li>
 					<li>11:45am - 1:00pm: Lunch time!</li>
 					<li>1:00pm - 2:30pm: Work time!</li>
 					<li>2:30pm - 3:30pm: Activity time! (Teens: inside! Preteens: outside!)</li>
 					<li>3:30pm - 4:45pm: Work time!</li>
 					<li>4:45pm: Shout-outs, day campers go home.</li>
 				</ul>
 				<?php
 			}
 			elseif ($dw == 5) { // friday
 				?>
 				<p>Today's schedule (Friday):</p>
 				<img src="finishline.gif" alt="Finishing your project!" style="display: block; margin-left: auto; margin-right: auto;" />
 				<ul>
 					<li>9:00am - 11:00am: Work time!</li>
 					<li>11:00am - 11:30am: Game time!</li>
 					<li>11:30pm - 1:00pm: Lunch & Raffle time!</li>
 					<li>1:00pm - 1:45pm: Evals, flash drives, t-shirts, and game time!</li>
 					<li>1:45pm: Across the street for Family Showcase</li>
 					<li>2:00pm-3:30pm: Family Showcase!</li>
 				</ul>
 				<h3>Before you leave!</h3>
 				<ol>
 					<li>Online evaluation</li>
 					<li>Sign out</li>
 					<li>Medications</li>
 				</ol>
 				<p>Have a great summer! We hope to see you back soon!</p>
 				<?php
 			}
 			else { // weekend
 				?>
 				<p>Have a great weekend!</p>
 				<?php
 			}
 		?>
		<?php 
			foreach ($pages as $url => $pagetitle) {
				//echo "<li><a href=\"$url\">$pagetitle</a></li>";
			}
		 ?>

		<!--
		<p>Here is my <a href="todo.php">todo list</a>.</p>
		-->
		<p>Visiting from home? You might want to check out my guide to getting your home computer set up with Java and Eclipse <a href="fromhome.php">on this page.</a></p>
<?php makeFooter(); ?>
