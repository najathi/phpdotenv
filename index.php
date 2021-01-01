<?php
require_once('vendor/autoload.php');

// with use
// use Dotenv\Dotenv;
// $dotenv = Dotenv::createImmutable(__DIR__)->load();


// without use
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__)->load();

// using RepositoryBuilder
$repository = Dotenv\Repository\RepositoryBuilder::createWithNoAdapters()
    ->addAdapter(Dotenv\Repository\Adapter\EnvConstAdapter::class)
    ->addWriter(Dotenv\Repository\Adapter\PutenvAdapter::class)
    ->immutable()
    ->make();

$dotenv = Dotenv\Dotenv::create($repository, __DIR__);
$dotenv->load();

var_dump($_ENV);
var_dump($_ENV['S3_BUCKET']);