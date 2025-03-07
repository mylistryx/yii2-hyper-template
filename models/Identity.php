<?php

namespace app\models;

use app\components\db\Record;
use app\traits\IdentityTrait;
use yii\web\IdentityInterface;

class Identity extends Record implements IdentityInterface
{
    use IdentityTrait;

    public static function tableName(): string
    {
        return Tables::Identity->value;
    }
}
