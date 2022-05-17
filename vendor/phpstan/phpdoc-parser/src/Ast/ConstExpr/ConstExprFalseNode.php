<?php

declare (strict_types=1);
namespace EasyCI20220517\PHPStan\PhpDocParser\Ast\ConstExpr;

use EasyCI20220517\PHPStan\PhpDocParser\Ast\NodeAttributes;
class ConstExprFalseNode implements \EasyCI20220517\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    use NodeAttributes;
    public function __toString() : string
    {
        return 'false';
    }
}
