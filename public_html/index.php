<?php

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

require '../app/autoload.php';



/* ========== Р О У Т И Н Г ========== */

$app = new \Slim\App();

$app->post('/api/generate', 'generate');
$app->get('/api/retrieve', 'retrieve');

$app->run();



/* ========== Д О П Ф У Н К Ц И И ========== */

function getGetData(ServerRequestInterface $request) {
    return $request->getQueryParams();
}

function getPostData(ServerRequestInterface $request) {
    $body = $request->getParsedBody();
    return $body;
}



/* ========== О Б Р А Б О Т Ч И К И ========== */

function generate(ServerRequestInterface $request, ResponseInterface $response) {
    $type = getPostData($request)['type'];
    $length = getPostData($request)['length'];

    $data = GenerateController::generateValue($type, $length);

    if ($data)
        echo json_encode($data);
    else
        echo json_encode("error: value is not generated");
}

function retrieve(ServerRequestInterface $request, ResponseInterface $response) {
    $id = getGetData($request)['id'];

    $data = RetrieveController::retrieve($id);

    if ($data)
        echo json_encode($data);
    else
        echo json_encode("error: value is not founded");
}