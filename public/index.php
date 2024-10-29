<?php
require '../vendor/autoload.php';

// 引入需要的類別
use Demo\Hello\Lara;
use Demo\Hello\Someone;
use Demo\HelloWorld as World;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Carbon\Carbon;

// 創建 Monolog 的 log channel
$log = new Logger('WISD');
$log->pushHandler(new StreamHandler('../log/my.log', Level::Warning));

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

// Carbon 測試程式碼
echo "Carbon Basic Usage Tests:\n";

// 1. 現在的時間
echo "1. Now: " . Carbon::now() . PHP_EOL;

// 2. 今天
echo "2. Today: " . Carbon::today() . PHP_EOL;

// 3. 明天
echo "3. Tomorrow: " . Carbon::tomorrow() . PHP_EOL;

// 4. 昨天
echo "4. Yesterday: " . Carbon::yesterday() . PHP_EOL;

// 5. 指定日期
$date = Carbon::create(2023, 10, 1, 0);
echo "5. Specified Date: " . $date . PHP_EOL;

// 6. 是否是週末
echo "6. Is Today a Weekend? " . (Carbon::now()->isWeekend() ? "Yes" : "No") . PHP_EOL;

// 7. 日期加一天
echo "7. Add One Day: " . Carbon::now()->addDay() . PHP_EOL;

// 8. 日期減一周
echo "8. Subtract One Week: " . Carbon::now()->subWeek() . PHP_EOL;

// 9. 取得月初
echo "9. Start of the Month: " . Carbon::now()->startOfMonth() . PHP_EOL;

// 10. 取得月末
echo "10. End of the Month: " . Carbon::now()->endOfMonth() . PHP_EOL;
