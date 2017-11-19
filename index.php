<?php 
$currentPageTitle = "Avaleht - programmeerimisharjutused";

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
                <progress max="3" value="1"></progress>
                <progress max="3" value="2"></progress>
                <progress max="3" value="3"></progress>
                <meter min="0" max="100" value="70">
                70 out of 100
                </meter>
            </div>
            <div class="col-md-6">


            </div>
        </div>
    </section>
    <?php include_once 'includes/footer.php'; ?>