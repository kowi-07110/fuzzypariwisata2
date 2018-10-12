<?php include('functions.php') ?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title Page</title>
    <meta charset="UTF-8">
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
  </head>
  <body>

<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">

          <form class="form col-md-12 center-block" method="POST" action="login_proses.php">
            <div class="form-group">
              <input name="username" class="form-control input-lg" placeholder="Username" type="text">
            </div>
            <div class="form-group">
              <input name="password" class="form-control input-lg" placeholder="Password" type="password">
            </div>
            <div class="form-group">
              <button name="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>
<?php include('footer.php') ?>