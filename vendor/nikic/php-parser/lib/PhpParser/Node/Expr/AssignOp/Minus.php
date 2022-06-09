<?php

declare (strict_types=1);
namespace EasyCI20220609\PhpParser\Node\Expr\AssignOp;

use EasyCI20220609\PhpParser\Node\Expr\AssignOp;
class Minus extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Minus';
    }
}
