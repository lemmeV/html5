<?php 

$currentPageTitle = "Ilmateenistuse App";

include_once 'functions/Forecast.php';
include_once 'functions/functions.php'; 
include_once 'includes/header.php'; 
include_once 'includes/navigation.php';

?>

<body>
    <section class="jumbotron">
        <div class="container">
            <h1><?php setPageTitle($currentPageTitle); ?></h1>
        </div> 
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="weather.php" method="post">

                    <div class="form-group">
                        <label for="date">Vali kuupäev:</label>
                        <select class="form-control" name="date">
                            <?php Forecast::getDateList(); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="day">Päev
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="night">Öö
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="city">Vali linn/piirkond:</label>
                        <select class="form-control" name="city">
                            <?php Forecast::getDayPlaces(); ?>
                        </select>
                    </div>
                    <button id="query" name="submit" type="submit" class="btn btn-default">Rakenda valikud</button>
                </form>
            </div>
            <div class="col-md-6" id="result">
                <p>
                    <?php

                    if(isset($_POST['submit'])) {

                        echo '<strong>Kuupäev: </strong>' . $_POST['date']. '<br>';
                        echo '<strong>Asukoht: </strong>'. $_POST['city']. '<br>';
                        echo '<strong>Aeg: </strong>';
                        echo ($_POST['optradio'] == 'night') ? 'Öö'.'<br>' : 'Päev' .'<br>';
                        echo '<strong>Ilmaennustus: </strong><br>';
                        Forecast::getDateForecast($_POST['date'],$_POST['optradio']);
                    }

                    ?>
                </p>

            </div>
        </div>
    </section>

<?php include_once 'includes/footer.php';  ?>