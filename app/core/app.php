<?php
//
/************************/
/*****PSR-7-INTERFACE****/
/************************/
//
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
//
/************************/
/*****SLIM-INSTANCE******/
/************************/
//
$app = new \Slim\App(['settings' => ['displayErrorDetails' => true,'responseChunkSize' => 10096]]);
//
/***********************/
/*****CONTAINER*********/
/***********************/
//
require_once '../app/core/container.php';
//
/**********************/
/*****ROUTER***********/
/**********************/
//
$app->get('/', \App\Controllers\TrxController::class.':wellcome');

$app->get('/tc-group', \App\Controllers\TcGroupController::class.':index');
$app->get('/tc-subgroup/{key}', \App\Controllers\PacController::class.':index');
$app->get('/trx-code/{key}', \App\Controllers\TrxController::class.':index');
//
/*********************/
/*****EJECUTAMOS******/
/*********************/
//
$app->run();

?>
