<?php


//$xml_data = simplexml_load_file('http://www.ilmateenistus.ee/ilma_andmed/xml/forecast.php') or die("Cannot read target XML");

$url = 'http://www.ilmateenistus.ee/ilma_andmed/xml/forecast.php';
$xml_data = new SimpleXMLElement($url, 0, true, "", false);

//var_dump($xml_data);

function getDateList($xml_data) {

    foreach ($xml_data as $day) {

        $date = $day->attributes()->date;

        echo '<option value=' . $date . '>';
        echo $date;
        echo "</option>";
    }

}

function getDayPlaces($xml_data) {

    foreach ($xml_data as $day_data) {

        foreach ($day_data->children() as $day_night) {
            if( $day_night->getName() == 'day') {
                foreach($day_night->children() as $place) {
                    if( $place->getName() === 'place') {
                        $name = $place->name;
                        echo '<option value="' . $name . '">';
                        echo $name;
                        echo '</option>';
                    }
                }
            }
        }
    }

}







function getDateForecast($xml_data,$date) {

    foreach ($xml_data as $day) {
        if($day->attributes()->date == $date) {
            var_dump($day);
        }
    }
}