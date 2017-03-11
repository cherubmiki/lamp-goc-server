<?php
// Routes

use questapp\models\Quest;

$app->get('/quest-create', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-create.phtml', $args);
});

$app->get('/quest-saved', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-saved.phtml', $args);
});

$app->get('/quest-list', function ($request, $response, $args) {
    $quests = (object)Quest::all()->toArray();

    return $this->response->withJSON($quests);
});

$app->get('/quest-accepted', function ($request, $response, $args) {
    return $this->renderer->render($response, 'quest-accepted.phtml', $args);
});

$app->get('/[{name}]', function ($request, $response, $args) {
    return $this->renderer->render($response, 'index.phtml', $args);
});
