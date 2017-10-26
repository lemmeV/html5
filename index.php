<?php include_once 'functions.php'; ?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Ilmateenistuse projekt</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="index.php" method="post">

                    <div class="form-group">
                        <label for="date">Vali kuupäev:</label>
                        <select class="form-control" name="date">
                            <option value="">27.10.2017</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" checked>Päev
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Öö
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="city">Vali linn/piirkond:</label>
                        <select class="form-control" name="city">
                            <option value="tallinn">Tallinn</option>
                        </select>
                    </div>
                    <button id="query" type="submit" class="btn btn-default">Rakenda valikud</button>
                </form>
            </div>
            <div class="col-md-6" id="result">
                <p>27.10.2017 Viljandis on temperatuur -3</p>

            </div>
        </div>
    </section>
</body>
</html>