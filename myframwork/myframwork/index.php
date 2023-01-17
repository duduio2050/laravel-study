<?php

// 세션 시작
session_start();
// 에러로그 출력 여부
error_reporting( E_ALL );
ini_set('display_errors',1);
header("Content-Type: text/html; charset=UTF-8");

// 오토로더
//include 'autoload.php';
$autoload = require __DIR__.'/vendor/autoload.php';

// env 설정
$dotenv = new DotEnv(__DIR__ . '/.env');
$intance_env = $dotenv->load();

// 라우터
//include 'route.php';

Router::add('get', '/Album/list', [new HomeController, 'list']);

Router::add('get', '/Album/read/([0-9]+)', [new HomeController, 'read']);`
`


Router::add('get', '/Album/create', [new HomeController, 'create']);
//Router::add('post', '/Album/store', [new HomeController, 'store']);
Router::add('post','/Album/store', [new HomeController, 'store']);


Router::add('get', '/Album/edit/([0-9]+)', [new HomeController, 'edit']);
Router::add('post', '/Album/update/([0-9]+)', [new HomeController, 'update']);
Router::add('get', '/Album/delete/([0-9]+)', [new HomeController, 'delete']);

// 라우트 실행
Router::run();
