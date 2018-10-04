
<?php 

$a = 10;
$b = 20;
$obdelnikobsah = $a * $b;

$strana = 6;
$uhel = 60;
$vyska = $strana * sin(deg2rad($uhel));
$vyska = round($vyska);

$trojuhelnikobsah = $strana * $vyska / 2;
$trojuhelnikobsah = round($trojuhelnikobsah);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Pythagoras</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Domů <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Úvod</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Pythagoras
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Myšlení a díla</a>
          <a class="dropdown-item" href="#">Život</a>
          <a class="dropdown-item" href="#">Vliv</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Hledat</button>
    </form>
  </div>
</nav>

    <div style="float:left">
  <iframe style="width:800px; height:600px;" src="https://www.youtube.com/embed/xQ0U7h6yd70"></iframe>
    </div>
</div>


<dl class="row text-center">
  <h1><dt class="col-sm-3">Obdelník</dt></h1>
</dl>

<hr>

<dl class="row text-center">
  <dt class="col-sm-3">Délka strany a:</dt>
    <dd class="col-sm-4"> <?php echo "$a cm"?></dd>
</dl>

<dl class="row text-center">
  <dt class="col-sm-3">Délka strany b:</dt>
    <dd class="col-sm-4"> <?php echo "$b cm" ?> </dd>
</dl>

<dl class="row text-center">
  <dt class="col-sm-3">Obsah obdelníku:</dt>
    <dd class="col-sm-4"> <?php echo "$obdelnikobsah cm <sup>2</sup>" ?> </dd>
</dl>


<dl class="row text-center">
  <h1><dt class="col-sm-12">Rovnostranný trojúhelník</dt></h1>
</dl>

<hr>
<br>

<dl class="row text-center">
  <dt class="col-sm-3">Délka strany:</dt>
    <dd class="col-sm-4"> <?php echo "$strana cm" ?></dd>
</dl>

<dl class="row text-center">
  <dt class="col-sm-3">Úhel:</dt>
    <dd class="col-sm-4"> <?php echo "$uhel stupňů" ?> </dd>
</dl>

<dl class="row text-center">
  <dt class="col-sm-3">Výška trojúhelníku:</dt>
    <dd class="col-sm-4"> <?php echo "$vyska cm" ?> </dd>
</dl>

<dl class="row text-center">
  <dt class="col-sm-3">Obsah trojúhelníku:</dt>
    <dd class="col-sm-4"> <?php echo "$trojuhelnikobsah cm <sup>2</sup>" ?> </dd>
</dl>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>