<?php

namespace app\models;

use app\traits\IdentityTrait;
use yii\base\BaseObject;
use yii\web\IdentityInterface;

class Identity extends BaseObject implements IdentityInterface
{
    use IdentityTrait;

    public int $id;
    public string $username;
    public string $password;
    public string $authKey;
    public string $accessToken;

    private static array $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];
}
