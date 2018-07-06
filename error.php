  <!-- Template: head.php -->
  <?php
  $root = realpath($_SERVER["DOCUMENT_ROOT"]);
  include "$root/template/head.php";
  ?>

  <!-- Metadata -->
  <title>Spoonie Living - Error</title>
  <meta name="Description" content="Error page for SpoonieLiving.com domain">

  <!-- Template: pre.php -->
  <?php
  include "$root/template/pre.php";
  ?>

  <!-- Content -->
  <div>
    <h1>Oops!</h1>
      <div class="row">

        <div class="col-xs-12 col-md-6">
          <div>
            
            <br><br>

            <p>Looks like this page doesn't exist. Be sure to check that the URL is properly formatted.</p>

            <p>Regardless, you can <a href="../index.php">click here to head back to our homepage</a> or use the search tool below to find what you were looking for:</p>

            <br>

          </div>

          <!--Search bar-->
          <div>
              <form class="form-inline" onsubmit="location.href='http://blog.spoonieliving.com/search/' + document.getElementById('myInput').value; return false;">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search" id="myInput">
                  <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                </div>
              </form>
          </div>

        </div> <!-- Column -->

          <div class="col-xs-12 col-md-6">
            <center><img src="../img/baby.png"></center>
          </div>

      </div> <!-- Row -->

      <div class="center">
        <p><center><i>*Note: If this seems to be an error on our part, definitely let us know by emailing us at <a href="mailto:contact@spoonieliving.com">contact@spoonieliving.com</a></i></center></p>
      </div>


  </div> <!-- End content -->

  <!-- Template: post.php -->
  <?php
  include "$root/template/post.php";
  ?>
