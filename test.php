<?php
/**
 * Created by PhpStorm.
 * User: Pack
 * Date: 2019/11/27
 * Time: 19:16
 */
require_once __DIR__ . '/vendor/autoload.php';
use Pack\Sixlaravel\Service;

$obj = new Service();

$msg = $obj->test();
var_dump($msg);