<?php 

$currentPageTitle = "Ilmateenistuse App";

include_once 'functions/xmlFunctions.php'; 
include_once 'functions/functions.php'; 
include_once 'includes/header.php'; 
include_once 'includes/navigation.php';

if(isset($_POST['submit'])) {

    echo $_POST['date'] . '<br>';
    echo $_POST['optradio']. '<br>';
    echo $_POST['city'];
}

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
                            <?php getDateList($xml_data); ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="Day" checked>Päev
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio" value="Night">Öö
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="city">Vali linn/piirkond:</label>
                        <select class="form-control" name="city">
                            <?php getDayPlaces($xml_data); ?>
                        </select>
                    </div>
                    <button id="query" name="submit" type="submit" class="btn btn-default">Rakenda valikud</button>
                </form>
            </div>
            <div class="col-md-6" id="result">
                <p>27.10.2017 Viljandis on temperatuur -3</p>

            </div>
        </div>
    </section>



<?php include_once 'includes/footer.php';  ?>