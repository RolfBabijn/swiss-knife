<?php

declare (strict_types=1);
namespace EasyCI20220612\Symplify\Astral\NodeNameResolver;

use EasyCI20220612\PhpParser\Node;
use EasyCI20220612\PhpParser\Node\Stmt\ClassLike;
use EasyCI20220612\Symplify\Astral\Contract\NodeNameResolverInterface;
final class ClassLikeNodeNameResolver implements NodeNameResolverInterface
{
    public function match(Node $node) : bool
    {
        return $node instanceof ClassLike;
    }
    /**
     * @param ClassLike $node
     */
    public function resolve(Node $node) : ?string
    {
        if (\property_exists($node, 'namespacedName')) {
            return (string) $node->namespacedName;
        }
        if ($node->name === null) {
            return null;
        }
        return (string) $node->name;
    }
}
