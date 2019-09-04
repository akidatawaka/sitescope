<?php
$file_dir = "";
$logpattern = date("YmdHis");
$xml = file_get_contents('php://input');
file_put_contents($file_dir . $logpattern . 'SIS.log', $xml);
http_response_code(200);
?>