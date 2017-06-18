**These files contain the template for the site and are called with PHP includes.**

**Example**

<!-- Initialize and call the first file -->
  <?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  include "$root/includes/head.php";
  ?>

<!-- Call the second file -->
  <?php
  include "$root/includes/pre.php";
  ?>

**See /includes/template.php for a basic page without content.**
