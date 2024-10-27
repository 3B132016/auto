<?php
require '../vendor/autoload.php';

// 類別先 import 進來
use Demo\Hello\Lara;
use Demo\Hello\Someone;

$lara = new Lara();
$vincent = new Someone('Vincent');

// 類別未先 import 進來
$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');
$hello = new Demo\HelloWorld();

// 類別另取別名
use Demo\HelloWorld as World;
$world = new World();
