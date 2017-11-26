<?php 

$currentPageTitle = "Tekstitöötlus";

include_once 'functions/ParseText.php';
include_once 'functions/functions.php'; 
include_once 'includes/header.php'; 
include_once 'includes/navigation.php'; 
?>



    <section class="jumbotron">
        <div class="container">
            <h1><?php setPageTitle($currentPageTitle); ?></h1></p>
            <p>Valida tekstist nimed. Tingimused on järgmised: </p>
            <ol>
                <li>Nimed algavad suure tähega</li>
                <li>Kui mitu sõna suure tähega lähevad järjest, see on üks nimi </li>
                <li>Kui sõnade vahel on "," need on erinevad nimed</li>
                <li>Kui sõna on lauses esimene, arvestame nimeks ainult siis, kui mujal tekstis leidub sama sõna suure tähega</li>
            </ol>
        </div> 
    </section>
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Algne tekst</h1>
                <p>
                <?php
                $result = new ParseText();
                echo $result->original_text; ?>
                </p>
                
            </div>
            <div class="col-md-6">

                <?php
                $result->getNames();

                ?>
            </div>
        </div>
    </section>


<?php include_once 'includes/footer.php'; ?>