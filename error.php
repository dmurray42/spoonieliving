<!-- TODO: I think this needs some sort of activation on my live server -->

<?php
$root = realpath($_SERVER["DOCUMENT_ROOT"]);
include "$root/template/head.php";
?>

<title>Spoonie Living - Error</title>
<meta name="Description" content="Error page for SpoonieLiving.com domain">

</head>

<body>

<div class="container">

  <div class="row">

    <div class="col-xs-12 col-md-6">
      <img src="../img/baby.png">
    </div>

    <div class="col-xs-12 col-md-6">
      <div>
        <h1>Oops!</h1>

        <p>Looks like this page doesn't exist. Be sure to check that the URL is properly formatted.</p>

        <p>Regardless, you can <a href="../index.php">click here to head back to our homepage</a> or use the search tool below to find what you were looking for:</p>

      </div>

      <div>
        <form class="navbar-form navbar-right" role="search" onsubmit="location.href='http://blog.spoonieliving.com/search/' + document.getElementById('myInput').value; return false;">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search"
            id="myInput">
          </div>
          <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
        </form>
      </div>

      <div>
        <p><i>*Note: If this seems to be an error on our part, definitely let us know by emailing us at <a href="mailto:contact@spoonieliving.com">contact@spoonieliving.com</a></i></p>
      </div>
    </div>
  </div>
</div>

</body>

</html>
