<?php
/*
https://developer.spotify.com/console/get-playlist-followers-contains/
[
    true
]


[
  true,
  false,
  false
]

jmperezperez,thelinmichael,wizzler

{
    "jmperezperez": true
}


{
    "jmperezperez": true,
    "thelinmichael": false,
    "wizzler": false
}
*/
$jmperezperez = array(true);
echo var_dump($jmperezperez)."<br>";
echo print_r($jmperezperez)."<br>";
$jmperez_json = json_encode($jmperezperez);
echo var_dump($jmperez_json)."<br>";
echo print_r($jmperez_json)."<br>";

$elements_3='{"jmperezperez":true, "thelinmichael":false, "wizzler": false}';
echo "3 elements string format" . "/n";
echo var_dump($elements_3)."<br>";
echo print_r($elements_3)."<br>";

$result_arr_ass = json_decode($elements_3,true);
echo "jmperezperez".$result_arr_ass["jmperezperez"]."<br>";
echo "thelinmichael".$result_arr_ass["thelinmichael"]."<br>";
echo "wizzler".$result_arr_ass["wizzler"]."<br>";
    
?>