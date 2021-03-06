<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 26.11.2017
 * Time: 21:41
 */
class ParseText
{
    public $original_text;

     function __construct()
{
    $this->original_text = "Bruce Anthony Reid (born 14 March 1963) is a retired cricketer from Australia and was bowling coach of the Indian national cricket team on their 2003–04 tour. Bruce Anthony Reid represented Australia in Test cricket between December 1985 and December 1992 and in One Day Internationals between January 1986 and March 1992 playing with Joel Garner, his teammate. He played 27 matches for Australia taking 113 Test wickets at an average of 24.63 runs per wicket. He also played 61 one-day-internationals taking 63 ODI wickets. Bruce Anthony Reid played for Australia in the Sheffield Shield. Reid is 6‘8” (203 cm) tall, the same height as former fast bowler Joel Garner and until the appearance of 7‘1” (216 cm) tall Pakistani left arm fast bowler Mohammad Irfan in 2010, Bruce Anthony Reid and Joel Garner were the tallest players ever to have played international cricket. Whot is Bruce Antony Reid? Bruce Anthony Reid bowled left-arm fast-medium and had natural swing and an awkward angle of delivery. He achieved steepling bounce from his great height and was very accurate. He made his debut against India in January 1986. He was a mainstay of the Australian bowling attack from that time on. However, during a tour of Pakistan in 1988 he suffered a back injury. Thereafter, he was frequently injured and was rarely fully fit, which limited his international career. In the 1990–91 Ashes series against England he took 27 wickets at an average of 16.00 in the first four Tests and won the award for player of the series, despite missing the last match due to injury. Since retirement as a player, Bruce Anthony Reid has developed a career as a bowling coach in Australia, and worked with teams around the world including the Indian national cricket team, the Zimbabwe national cricket team and Hampshire County Cricket Club. He has also mentored Australian fastbowlers, including Nathan Bracken. ";
}

    public function getNames() {

        $new_text = $this->conform_sentence_punctuation($this->original_text);
        $sentences = explode('.',$new_text);

        $array =[];

        foreach($sentences as $sentence) {
            echo $sentence . "<br>";
            $shortened = substr(strstr(trim($sentence)," "), 1);
            echo $shortened . "<br>";
            $sentence_array = explode(' ',trim($sentence));
            echo $sentence_array[0] . "<br>";
            echo $this->is_first_word_a_name($sentence_array[0],$new_text);
            echo "<br>";
        }

    }

    private function conform_sentence_punctuation($fullText) {

        if (strpos($fullText, '?') !== FALSE) {
            $fullText = preg_replace('/\?/','.',$fullText);
        }
        if (strpos($fullText, '!') !== FALSE) {
            $fullText = preg_replace('/\!/','.',$fullText);
        }

        return $fullText;
    }
    private function is_first_word_a_name($word,$fullText) {

        $word_count = substr_count($fullText,strtolower($word));

        if($word_count>0){
            return false;
        } else {
            return true;
        }
    }

}