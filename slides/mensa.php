<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<style>
table.speiseplan {
	width: 100%;
	margin:0;
	border-collapse: collapse;
}        
table.speiseplan td { padding:6px; vertical-align: top; }
table.speiseplan tr {
	border-top: 1px solid #666;
	border-bottom: 1px solid #666;	
}

tr.trenner > td { background-color: #ccc; }

td.cell1 { width:60% }
td.cell1 div { margin-left:12px }
td.cell2a { width:12%; font-size:10px;color:#585858 }
td.cell2b { width:18%; text-align: right; }
td.cell3 { width:9%; text-align: center; color:#444 }

div.pk { height:19px; color:#444; font-size:14px; font-weight: bold }
div.artikel { color: #a10f29; font-weight: normal }
img.icon { margin:12px 0 0 3px }
img.icon-small { width:16px; height:16px; margin: 0 3px 0 3px }

table.legende {
	width:98%; margin:15px 0 0 12px; color:#6574b1;    
}
table.legende td { width:48% }
</style>

</head>
<body>

<?php

//error_reporting(E_ALL);
//ini_set('display_errors', True);

date_default_timezone_set('CET');

$url = 'http://www.max-manager.de/daten-extern/sw-bonn/html/inc/ajax-php_konnektor.inc.php';
$data = array('func' => 'make_spl', 'locId' => '2', 'lang' => 'de', 'date' => date("y-m-d"));

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