<?php

declare (strict_types=1);
namespace EasyCI20220206\PhpParser\Node\Expr\AssignOp;

use EasyCI20220206\PhpParser\Node\Expr\AssignOp;
class Div extends \EasyCI20220206\PhpParser\Node\Expr\AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Div';
    }
}
