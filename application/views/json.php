<?php 
   header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");//Dont cache
   header("Pragma: no-cache");//Dont cache
   header("Expires: Thu, 19 Nov 1981 08:52:00 GMT");//Make sure it expired in the past (this can be overkill)
$http_origin = $_SERVER['HTTP_ORIGIN'];
header('Content-type: application/javascript');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Credentials: true');
header("Access-Control-Allow-Origin: $http_origin");
header('Access-Control-Max-Age: 86400');

echo json_encode($message);
?>
