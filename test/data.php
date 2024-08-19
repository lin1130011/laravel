<?php
header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Origin:http://192.168.211.72');
// header('Access-Control-Allow-Origin:http://192.168.211.70:8200');
// header('Access-Control-Allow-Origin: http://127.0.0.1:5501');
// Access-Control-Allow-Origin: https://developer.mozilla.org


// $http_origin = $_SERVER['HTTP_ORIGIN'];
// dd($http_origin);

// if ($http_origin == "http://192.168.211.72" || $http_origin == "http://192.168.211.70:8200") {
//     header("Access-Control-Allow-Origin: $http_origin");
// }

header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: X-Requested-With");
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$num1 = $_GET['num1'] ?? 0;
$num2 = $_GET['num2'] ?? 0;
$sum = $num1 + $num2;
$name = $_GET['name'] ?? 'nobody';


$data = [
    'num1' => $num1,
    'num2' => $num2,
    'sum' => $sum,
    'name' => $name
];


// dd($data);
echo json_encode($data);
