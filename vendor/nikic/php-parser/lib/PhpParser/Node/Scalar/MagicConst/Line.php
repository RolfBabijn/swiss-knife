<?php

declare (strict_types=1);
namespace EasyCI202212\PhpParser\Node\Scalar\MagicConst;

use EasyCI202212\PhpParser\Node\Scalar\MagicConst;
class Line extends MagicConst
{
    public function getName() : string
    {
        return '__LINE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Line';
    }
}
