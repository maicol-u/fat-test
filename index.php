<?php
require 'vendor/autoload.php';

$f3 = \Base::instance();
$f3->set('AUTOLOAD', 'app/controller/');

$f3->route('GET /', 'PageController->home');
$f3->run();