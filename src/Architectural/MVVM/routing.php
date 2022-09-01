<?php

require '../../../vendor/autoload.php';

use Patterns\Architectural\MVVM\ViewModel;

$pdo = new PDO('mysql:dbname=patterns;host=127.0.0.1', "root", "mysql2022");

switch ($_REQUEST['type']) {
    case'create':
        create($_POST, $pdo);
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
