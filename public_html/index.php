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
    $post = getPostData($request);

    $type = 'int';
    $length = 5;

    if (array_key_exists('type', $post)) {
        $type = Security::protectData($post['type']);
    }
    if (array_key_exists('length', $post)) {
        $length = Security::protectData($post['length']);
    }

    $data = GenerateController::generateValue($type, $length);

    if ($data)
        echo json_encode($data);
    else
        echo json_encode("error: value is not generated");
}

function retrieve(ServerRequestInterface $request, ResponseInterface $response) {
    $id = Security::protectData(getGetData($request)['id']);

    $data = RetrieveController::retrieve($id);

    if ($data)
        echo json_encode($data);
    else
        echo json_encode("error: value is not founded");
}