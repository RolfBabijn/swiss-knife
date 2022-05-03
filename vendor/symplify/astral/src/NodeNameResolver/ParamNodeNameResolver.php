<?php

declare (strict_types=1);
namespace EasyCI20220503\Symplify\Astral\NodeNameResolver;

use EasyCI20220503\PhpParser\Node;
use EasyCI20220503\PhpParser\Node\Expr;
use EasyCI20220503\PhpParser\Node\Param;
use EasyCI20220503\Symplify\Astral\Contract\NodeNameResolverInterface;
final class ParamNodeNameResolver implements \EasyCI20220503\Symplify\Astral\Contract\NodeNameResolverInterface
{
    public function match(\EasyCI20220503\PhpParser\Node $node) : bool
    {
        return $node instanceof \EasyCI20220503\PhpParser\Node\Param;
    }
    /**
     * @param Param $node
     */
    public function resolve(\EasyCI20220503\PhpParser\Node $node) : ?string
    {
        $paramName = $node->var->name;
        if ($paramName instanceof \EasyCI20220503\PhpParser\Node\Expr) {
            return null;
        }
        return $paramName;
    }
}
