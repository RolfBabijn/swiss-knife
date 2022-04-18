<?php

declare (strict_types=1);
namespace EasyCI20220418\Symplify\Astral\PhpDocParser\Contract;

use EasyCI20220418\PHPStan\PhpDocParser\Ast\Node;
/**
 * Inspired by https://github.com/nikic/PHP-Parser/blob/master/lib/PhpParser/NodeVisitor.php
 */
interface PhpDocNodeVisitorInterface
{
    public function beforeTraverse(\EasyCI20220418\PHPStan\PhpDocParser\Ast\Node $node) : void;
    /**
     * @return int|\PHPStan\PhpDocParser\Ast\Node|null
     */
    public function enterNode(\EasyCI20220418\PHPStan\PhpDocParser\Ast\Node $node);
    /**
     * @return mixed[]|int|\PhpParser\Node|null Replacement node (or special return)
     */
    public function leaveNode(\EasyCI20220418\PHPStan\PhpDocParser\Ast\Node $node);
    public function afterTraverse(\EasyCI20220418\PHPStan\PhpDocParser\Ast\Node $node) : void;
}
