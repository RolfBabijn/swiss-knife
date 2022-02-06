<?php

declare (strict_types=1);
namespace EasyCI20220206\PhpParser\Node\Expr\Cast;

use EasyCI20220206\PhpParser\Node\Expr\Cast;
class String_ extends \EasyCI20220206\PhpParser\Node\Expr\Cast
{
    public function getType() : string
    {
        return 'Expr_Cast_String';
    }
}
