<?php 

$currentPageTitle = "Ilmateenistuse App";

include_once 'functions/xmlFunctions.php'; 
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

            </div>
            <div class="col-md-6" id="result">

            </div>
        </div>
    </section>



<?php include_once 'includes/footer.php';  ?>