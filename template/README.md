**These files contain the template for the site and are called with PHP template.**

**Example**

<!-- Initialize and call the first file -->
  <?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  include "$root/template/head.php";
  ?>

<!-- Call the second file -->
  <?php
  include "$root/template/pre.php";
  ?>

**See /template/new-page-template.php for a basic page without content.**
