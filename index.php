<!DOCTYPE html>
<html lang="en">
<head>
  <title>P1 - System Setup/Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <style>
      /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .bg-1 {
        background-color: #FAAC58;
        color: #ffffff;
    }
    .bg-2 {
        background-color: #474e5d;
        color: #ffffff;
    }
    </style>

</head>
<body>
  <nav class="navbar navbar-inverse narbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/p1">Home</a>
      </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </div>
  </nav>

  <div class="container-fluid bg-1 text-center">
    <img src="img/selfie.jpg" class="img-circle" width="350" height="350">
    <h3>Jingjing Zheng (Daisy :))</h3>
  </div>

  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-4">
        <h2>Project2 Title</h2>
        <p>View:[link]</p>
        <p>Github:[link]</p>
      </div>
      <div class="col-sm-4">
        <h2>Project3 Title</h2>
        <p>View:[link]</p>
        <p>Github:[link]</p>
      </div>
      <div class="col-sm-4">
        <h2>Project4 Title</h2>
        <p>View:[link]</p>
        <p>Github:[link]</p>
      </div>
    </div>
  </div>

  <hr>
  <footer>
    <p>daisy@dynamic web application</p>
  </footer>

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
