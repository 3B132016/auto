<?php
require '../vendor/autoload.php';

// 引入需要的類別
use Demo\Hello\Lara;
use Demo\Hello\Someone;
use Demo\HelloWorld as World;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// 創建 Monolog 的 log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Level::Warning));

// 使用 HelloWorld 和其他類別
$lara = new Lara();
$vincent = new Someone('Vincent');

// 類別未先 import 進來
$mary = new \Demo\Hello\Someone('Mary');
$john = new Demo\Hello\Someone('John');
$hello = new Demo\HelloWorld();

// 使用 World 別名
$world = new World();

// 添加記錄到 log
$log->warning('Foo');
$log->error('Bar');
