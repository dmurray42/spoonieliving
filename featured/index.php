<!-- Template: head.php -->
<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/includes/head.php";
?>

<!-- Metadata -->
<title> </title>
<meta name="Description" content="Featured blogs for spoonie resources">
<meta name="Keywords" content="spoonie, chronic illness, disability, invisible illness">

<!-- Template: pre.php -->
<?php
include "$root/includes/pre.php";
?>

<!-- Content -->
<div>

	<!-- Content header -->
	<h1>Featured Blogs</h1>
	<hr>
	<br>

	<!-- Main content -->

	<!-- Introduction -->
	<p>Each month, we feature a new blog in our monthly newsletter. These are the blogs we've enjoyed reading, posted a bunch of resources from, and/or just want the world to know about! They're sure to become your favorites.</p>

	<p>Want to hear about our featured blogs as soon as we announce them? <a href="http://eepurl.com/b4tg45" target="_blank">You can join our monthly newsletter</a> and get the best posts of each month to boot!</p>
	<br>

	<!-- How To Get On -->
	<div class="featured-item" id="howtogeton">
		<h4><a href="https://howtogeton.wordpress.com">How to Get On</a></h4>
		<div class="pull-left margin-right">
			<img src="/img/featured/howtogeton.png" alt="Watercolor painting of cat with abstract background">
		</div>
		<div>
			<p>Illustrated with beautiful watercolor paintings, <a href="https://howtogeton.wordpress.com">How to Get On</a> is "a little spoonie guide on how to navigate 'the system' and how to live a great, disabled life."</p>

			<p>The site contains articles on applying for and receiving disability benefits, and a whole lot more!</p>

			<p>The resources here are mostly US-based, but the advice will likely be a big help for folks from other countries, too.</p>
		</div>
	</div> <!-- End How To Get On -->

</div> <!-- End content -->

<!-- Template: post.php -->
<?php
include "$root/includes/post.php";
?>
