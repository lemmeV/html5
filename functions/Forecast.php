<?php

/**
 * Created by PhpStorm.
 * User: Lemme
 * Date: 24.11.2017
 * Time: 21:51
 * Class for getting and displaying forecast info from Ilmateenistus
 */
class Forecast
{
    /**
     * Gets the list of dates that are available on the Ilmateenistus XML
     */

    public static function getDateList() {

        // Retrieve the XML data with SimpleXMLElement class

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

        // Prints out a list of date options

        foreach ($xml_data as $day) {

            $date = $day->attributes()->date;

            echo '<option value=' . $date . '>';
            echo $date;
            echo "</option>";
        }

    }
    /**
     * Gets the list of places that are available on the Ilmateenistus XML
     */

    public static function getDayPlaces() {

        // Retrieve the XML data with SimpleXMLElement class

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

        // Prints out a list of place options

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

    /**
     * @param $date - takes in date the user selected
     * @param $time - takes in time of day/night the user selected
     * Prints out the forecast text
     */

    public static function getDateForecast($date,$time)
    {
        // Retrieve the XML data with SimpleXMLElement class

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

        // prints out a forecast text from either day or night

        foreach ($xml_data as $day) {

            if ($day->attributes()->date == $date) {

                if ($time == 'night') {

                    foreach ($day->night as $d) {
                        echo $d->text;
                    }

                } elseif ($time == 'day') {

                    foreach ($day->day as $d) {
                        echo $d->text;
                    }
                } else {}

            }
        }
    }
}