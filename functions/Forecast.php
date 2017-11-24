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
     * Function 
     */
    public static function getDateList() {

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

        foreach ($xml_data as $day) {

            $date = $day->attributes()->date;

            echo '<option value=' . $date . '>';
            echo $date;
            echo "</option>";
        }

    }

    public static function getDayPlaces() {

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

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

    public static function getDateForecast($date,$time)
    {

        $xml_data = new SimpleXMLElement(URL, 0, true, "", false);

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