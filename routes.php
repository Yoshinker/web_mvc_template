<?php

$app = new App();

// mes routes
$app->route("home", "HomeController", "index");

// 404 si aucune route ne correspond
$app->notfound();