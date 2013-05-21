<?php
ini_set('display_errors', 'On');
$pages = array(
	"intro.php" => "Introduction",
	"gettingstarted.php" => "Getting Started",
	"variables.php" => "Variables",
	"if.php" => "If Statements",
	"loops.php" => "Loops",
	"methods.php" => "Methods",
	"scope.php" => "Variable Scope",
	"input.php" => "User Input",
	"objects.php" => "Objects",
	"arrays.php" => "Arrays",
	"swing.php" => "GUIs with Swing",
	"quickref.php" => "Quick reference"
);

function makeHeader($title) {
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php echo $title ?> | RoflsRules.com</title>
		
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<script src="http://use.edgefonts.net/bitter.js"></script>
		<link rel="stylesheet/less" type="text/css" href="/java/styles.less">
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
		<link href="../prettify/sons-of-obsidian.css" type="text/css" rel="stylesheet" />
		<script src="../less.js" type="text/javascript"></script>
	</head>
	<body onload="prettyPrint()">
		<div id="container">
			<h1>Programming in Java<br />(with Rofl)</h1>
			 <div id="navbox">
			 	<ul>
			 		<li><a href="index.php">Home</a></li>
				 	<?php 
				 	global $pages;
				 	foreach ($pages as $filename => $pagetitle) {
				 		echo "<li><a href=\"$filename\">$pagetitle</a></li>";
				 	}
				 	 ?>
			 	 </ul>
			 </div>
			 <div class="lesson">
			<h2><?php echo $title; ?></h2>
			
	<?php
}

function makeFooter() {
	?>
			</div>
			<div class="footer">
			<hr />
			<!--
			<p>Warning! I'm still working on this. Some parts are still unfinished or nonexistent!</p>
			-->
			<p><a href="about.php">About</a> | <a href="https://docs.google.com/a/roflsrules.com/spreadsheet/viewform?formkey=dGdUN2xhalVrd29kdmRlcVhJUXFwRFE6MQ">Feedback</a></p>
			<a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/80x15.png" width="80" height="15" /></a>
			<br />
			
			<!--
			<span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">Rofl&#39;s Rules Java Tutorials</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://roflsrules.com/java" property="cc:attributionName" rel="cc:attributionURL">Rofl</a> are licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a>.
			-->
			</div>
		</div>
	</body>
	<script type="text/javascript" src="../prettify/prettify.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function(){$(window).scroll(function(){$("#navbox").css("top",Math.max(0,193-$(this).scrollTop()))})})
	</script>
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32467757-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>
	</html>
	<?php
}

?>
