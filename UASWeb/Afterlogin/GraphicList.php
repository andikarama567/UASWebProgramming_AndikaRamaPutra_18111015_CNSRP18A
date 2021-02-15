<!doctype html>
<html lang="en">
  <head>
    <title>Album example · Bootstrap</title>



    <!-- Bootstrap core CSS -->
<link href="../bootstrap-4.5.3-dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="GraphicList.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">AMD Company</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="cover.php">Home<span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="ProcessorList.php">Features</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Sign Out</a>
            </li>
        </ul>
        </div>
        </nav>
</header>

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>AMD Hardware</h1>
      <p class="lead">Here is information about AMD's product hardware. You can read a several part of AMD's hardware and hope this information can help you to understand about AMD's hardware.</p>
      <p>
        <a href="ProcessorList.php" class="btn btn-primary my-2">AMD Processor List</a>
        <a href="GraphicList.php" class="btn btn-secondary my-2">AMD Graphics List</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="../Graphic/2 (2).jpg" width="100%" height="225">
            <div class="card-body">
              <p class="card-text">AMD Radeon Vega RX is one of AMD video graphics series that use for pc and it can raise up pc performance. So user can every single work with no worries. </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="../Graphic/2 (4).png" width="100%" height="225">
            <div class="card-body">
              <p class="card-text">AMD Radeon is one of AMD video graphics series that basicly used for laptop. This series can help you to finish your job in laptop with high performance.
                </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="../Graphic/2(4).png" width="100%" height="225">
            <div class="card-body">
              <p class="card-text">AMD Radeon Vega is one of AMD video graphics series that basicly used for laptop with AMD Ryzen Processors. This series is basicly be one with the Processor.
                </p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
       
</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Back to top</a>
    </p>
    <p>&copy;Copyright By :</p>
      <p>18111015_Andika Rama Putra_CNSRP18A.</p>
  </div>
</footer>
</html>
