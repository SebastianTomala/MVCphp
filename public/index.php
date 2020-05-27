<?php 
require "../vendor/scssphp/scssphp/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;

$scss = new Compiler();
$scss->setFormatter('ScssPhp\ScssPhp\Formatter\Expanded');

$scssIn = file_get_contents(__DIR__ . '/scss/style.scss');
$cssOut = $scss->compile($scssIn);
file_put_contents(__DIR__ . '/css/style.css', $cssOut);
require_once '../app/bootstrap.php';


// Init core library

$init = new Core;