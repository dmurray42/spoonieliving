<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/template/head.php";
?>

<title>Spoonie Living</title>
<meta name="Description" content="Disability and Chronic Illness Lifestyle">
<meta name="Keywords" content="spoonie, chronic illness, disability, invisible illness, chronic pain, mental illness">
<meta property="og:image" content="../img/logo_image.png">


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

			<div class="row">
				<div class="col-sm-6 col-md-6">
					<a href="http://bit.ly/chronically-badass">
						<div class="thumbnail noborder">
							<img src="../img/baby.png" alt="Baby being fed with spoon"></a>
							<div class="caption">
								<h4><center><a href="http://bit.ly/chronically-badass">New to sick kid life? Check out Chronically Badass, our zine for new spoonies!</a></center></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6">
						<a href="http://blog.spoonieliving.com">
							<div class="thumbnail noborder">
								<img src="../img/man.png" alt="Man with spoon"></a>
								<div class="caption">
									<h4><center><a href="http://blog.spoonieliving.com">Want to get straight to the resources? Head on over to the blog!</a></center></h4>
								</div>
							</div>
						</div>

				</div>

				<p>
					Enjoy, friends!
				</p>
				<br>
				<p>
					Love and spoons,
				</p>
				<p>
					<a href="http://www.dmurring.com"><img src="/img/name.png" alt="Diane Murray" width="160px"></a>
				</p>
				<p>
					<i>Creator and Editor</i>
				</p>

				<br>
				<p>
					<i>p.s. Never heard the term "spoonie" before? Check out Christine Miserandino's <a href="http://www.butyoudontlooksick.com/articles/written-by-christine/the-spoon-theory/">Spoon Theory</a> to learn more.</i>
				</p>

			<?php
			include "$root/template/post.php";
			?>
