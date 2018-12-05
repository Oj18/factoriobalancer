<?php
$path = file_get_contents("/data/json/" + $_GET['input'] + "-" + $_GET['output'] + ".json");
$json = json_decode($path, true);

$data = array(
    'blueprint' => $path[$_GET['type']],
    'image' => "https://oj18.github.io/balpi/data/pics/" + $_GET['type'] + "/" + $_GET['input'] + "-" + $_GET['output'] + ".png"
);

header('Content-Type: application/json');
echo json_encode($data);