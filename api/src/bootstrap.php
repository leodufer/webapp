<?php

//-- Importa el framework silex
require_once (BASE_DIR . '/vendor/silex.phar');

//-- Importamos redbeanphp
require_once (BASE_DIR . '/vendor/rb.phar');

//-- Crea una nueva aplicación silex
$app = new Silex\Application();

//-- Setup database access by redbeanphp
R::setup(HOST,USER,PASS);
