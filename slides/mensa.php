<html>
<body>

<?php

//error_reporting(E_ALL);
//ini_set('display_errors', True);

date_default_timezone_set('CET');

$url = 'http://www.max-manager.de/daten-extern/sw-bonn/html/inc/ajax-php_konnektor.inc.php';
$data = array('func' => 'make_spl', 'locId' => '3', 'lang' => 'de', 'date' => date("y-m-d"));

$options = array(
   'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\nAccept: application/json\r\nX-Requested-With: XMLHttpRequest\r\nX-Request: JSON\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    ),
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result

?>
</body>
</html>