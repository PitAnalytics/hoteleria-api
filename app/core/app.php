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
$app->get('/', \App\Controllers\TrxCodeController::class.':wellcome');

$app->get('/tc-group', \App\Controllers\TcGroupController::class.':index');
$app->get('/tc-subgroup/{key}', \App\Controllers\PacController::class.':index');
$app->get('/trx-code/{key}', \App\Controllers\TrxCodeController::class.':index');
//
/*********************/
/*****EJECUTAMOS******/
/*********************/
//
$app->run();

?>
