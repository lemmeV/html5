<?php
/**
 * Created by PhpStorm.
 * User: lyssa
 * Date: 26/10/2017
 * Time: 17:32
 */

$info_url = 'http://www.ilmateenistus.ee/ilma_andmed/xml/forecast.php';
$response_xml_data = file_get_contents($info_url);
$data = simplexml_load_string($response_xml_data);

$date = $data[0];
//->attributes->date;

var_dump($date);
