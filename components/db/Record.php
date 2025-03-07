<?php

namespace app\components\db;

use Yii;
use yii\db\ActiveRecord;

abstract class Record extends ActiveRecord
{
    public function t($message, ?array $params = null, ?string $category = null): string
    {
        if (is_null($category)) {
            $reflection = new \ReflectionClass($this);
            $category = $reflection->getShortName();
        }

        return Yii::t($category, $message, $params);
    }
}