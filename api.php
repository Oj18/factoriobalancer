<?php
$path = file_get_contents("./data/json/" . $_GET['input'] . "-" . $_GET['output'] . ".json");
$json = json_decode($path, true);

$data = array(
    'blueprint' => $json[$_GET['type']],
    'image' => "https://balpi.herokuapp.com/data/pics/" . $_GET['type'] . "/" . $_GET['input'] . "-" . $_GET['output'] . ".png"
);

header('Content-Type: application/json');
echo json_encode($data);