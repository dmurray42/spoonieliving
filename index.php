<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/template/head.php";
?>

<title>Spoonie Living</title>
<meta name="Description" content="Disability and Chronic Illness Lifestyle">
<meta name="Keywords" content="spoonie, chronic illness, disability, invisible illness, chronic pain, mental illness">


<?php
include "$root/template/pre.php";
?>

			<h1>Welcome To Spoonie Living!</h1>
			<hr>
			<br>
			<p>
				We're stoked that you've stopped by! Whether you're a patient, friend or family to one, a caregiver, or a health services provider, we know you'll find something useful on our site.
			</p>
			<p>
				Spoonie Living started when I saw a need for a no-filler, resource-heavy blog for folks with chronic illnesses and disabilities. So, take a look around and see what grabs you!
			</p>
			<br>

			<div>
				<img class="textwrap-image-right" src="/img/baby.png" height="100px" alt="Baby being fed with spoon">
			</div>

			<div>
				<p>New to sick kid life? Check out <a href="http://bit.ly/chronically-badass">Chronically Badass</a>, our zine for new spoonies!</p>
			</div>

			<br>

			<div class="clear-both">
				<img class="textwrap-image-left" src="/img/man.png" height="100px" alt="Man with spoon">

				<p>Want to get straight to the resources? Pop on over to <a href="http://blog.spoonieliving.com">the blog</a>!</p>
					<br>
			</div>

			<div>
				<p>
					Enjoy, friends!
				</p>
				<br>
				<p>
					Love and spoons,
				</p>
				<a href="http://www.dmurring.com"><img src="/img/name.png" alt="Diane Murray" height="30px"></a>
				<p>
					<i>Creator and Editor</i>
				</p>

				<br>
				<p>
					<i>p.s. Never heard the term "spoonie" before? Check out Christine Miserandino's <a href="http://www.butyoudontlooksick.com/articles/written-by-christine/the-spoon-theory/">Spoon Theory</a> to learn more.</i>
				</p>

			</div>

			<?php
			include "$root/template/post.php";
			?>
