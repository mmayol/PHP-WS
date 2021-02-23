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
?>