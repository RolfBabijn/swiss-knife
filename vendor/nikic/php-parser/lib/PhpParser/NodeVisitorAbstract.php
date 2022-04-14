<?php

declare (strict_types=1);
namespace EasyCI20220414\PhpParser;

/**
 * @codeCoverageIgnore
 */
class NodeVisitorAbstract implements \EasyCI20220414\PhpParser\NodeVisitor
{
    public function beforeTraverse(array $nodes)
    {
        return null;
    }
    public function enterNode(\EasyCI20220414\PhpParser\Node $node)
    {
        return null;
    }
    public function leaveNode(\EasyCI20220414\PhpParser\Node $node)
    {
        return null;
    }
    public function afterTraverse(array $nodes)
    {
        return null;
    }
}
