<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;
use ProxyManager\Generator\ClassGenerator;
use ProxyManager\ProxyGenerator\LazyLoadingValueHolderGenerator;

require 'vendor/autoload.php';

$generator = new LazyLoadingValueHolderGenerator();

$generator->generate(
    new \ReflectionClass(AMQPStreamConnection::class),
    $generatedClass = new ClassGenerator('Whatever')
);

var_dump($generatedClass->getMethod('__set'));
