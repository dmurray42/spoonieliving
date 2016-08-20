<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/includes/top.php";
?>

<meta name="Description" content="BRIEF DESCRIPTION OF PAGE HERE.">
<title>TITLE HERE</title>
<meta name="Keywords" content="KEYWORD1, KEYWORD2, KEYWORD">

<?php
include "$root/includes/middle.php";
?>

<h1>HEADER</h1>
<hr>
<br>
<p>
	CONTENT
</p>

<?php
include "$root/includes/bottom.php";
?>
