<?php

namespace app\enums;

use app\traits\EnumToArray;

enum Tables: string
{
    use EnumToArray;

    case Identity = 'identity';
}