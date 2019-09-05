<?php

require_once "config.php";

require_once "Connector.php";
require ROOT . "vendor/autoload.php";

Connector::requireFolder(APP . "components");
Connector::requireFolder(APP . "controllers");
Connector::requireFolder(APP . "database");
Connector::requireFolder(APP . "model");
Connector::requireFolder(APP . "security");
Connector::requireFolder(APP . "tables");
Connector::requireFolder(APP . "test");