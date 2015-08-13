<?php

require_once "config/config.php";
//visit space
$conf['ctrl']['workspace_1'] = 'application';
require_once "Dui.php";

Polar::Dispatcher($conf);

