<!doctype html>

<html>
  <head>
  
    <title>Registration</title>

<link href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">
<link href="form-validation.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
  </head>
  
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <h2>AMD Member</h2>
    <p class="lead">Be part of us and you will get information about our product. With AMD you will have the best experience using your computer with no worries.</p>
  </div>

  
    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Registration</h4>
      <form action="regact.php" method="POST">

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="firstName">First name</label>
            <input type="text" class="form-control" name="fname" placeholder="" required>
          </div>

          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" name="lname" placeholder="" value="" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">ID</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">*Required</span></label>
          <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
        </div>

        <div class="mb-3">
          <label for="pwd">Password</label>
          <input type="password" class="form-control" name="pwd" placeholder="password" required>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address1" placeholder="Your Address" required>
        </div>

        <div class="mb-3">
          <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="address2" placeholder="Apartment or suite">
        </div>

        <!-- <div class="row">
          <div class="col-md-5 mb-3">
            <label for="country">Country</label>
            <select class="custom-select d-block w-100" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
              <option>United Kingdom</option>
              <option>Indonesia</option>
              <option>Australia</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <select class="custom-select d-block w-100" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
              <option>Jakarta</option>
              <option>Machester</option>
              <option>Melbourne</option>
            </select>
          </div> -->

          <!-- <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="Postal id" required>
          </div>
        </div> -->

        <!-- <div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Save">
			</div> -->
        
        <hr class="mb-4">
        <a href="../Login/Login.php">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
        </a>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy;Copyright By :</p>
    <p class="mb-1">18111015_Andika Rama Putra_CNSRP18A.</p>
  </footer>
</div>
</body>
</html>
