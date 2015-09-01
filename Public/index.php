<?php
DEFINE('APP_PATH', __DIR__ . '../Application/');

require_once "../Polar/Polar.class.php";

Polar::Dispatcher($conf);
