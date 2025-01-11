<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\commands;

use app\components\controllers\ConsoleController;
use yii\console\ExitCode;

class HelloController extends ConsoleController
{
    public function actionIndex(string $message = 'hello world'): int
    {
        $this->stdout($message . PHP_EOL);

        return ExitCode::OK;
    }
}
