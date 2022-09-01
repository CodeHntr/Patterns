<?php

require '../../../vendor/autoload.php';

use Patterns\Architectural\MVVM\ViewModel;

$pdo = new PDO('mysql:dbname=patterns;host=127.0.0.1', "root", "mysql2022");

switch ($_REQUEST['type']) {
    case'create':
        create($_POST, $pdo);
        break;
    case'getStreetLights':
        getStreetLights($pdo);
        break;
    case 'deleteAll':
        deleteAllTrafficLights($pdo);
        break;
    case 'deleteById':
        deleteTrafficLightById($pdo, $_POST);
        break;
    case 'showById':
        getById($pdo, $_GET);
        break;
    case 'changeState':
        changeState($pdo, $_POST);
        break;
}

function create(array $data, $pdo)
{
    $creator = new ViewModel($pdo, $data);
    echo json_encode(
        $creator->create($data),
        JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE
    );
}

function getStreetLights($pdo)
{
    $getter = new ViewModel($pdo);
    echo json_encode($getter->getAll());
}

function deleteAllTrafficLights($pdo)
{
    $deletor = new ViewModel($pdo);
    return $deletor->deleteAll();
}

function deleteTrafficLightById($pdo, $data)
{
    $deletor = new ViewModel($pdo, $data);
    return $deletor->delete($data['id']);
}

function getById($pdo, $data)
{
    $trafficLight = new ViewModel($pdo);
    print_r($trafficLight->getById($data['id']));
}

