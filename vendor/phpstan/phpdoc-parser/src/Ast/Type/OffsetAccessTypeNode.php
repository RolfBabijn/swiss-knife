<?php

declare (strict_types=1);
namespace EasyCI20220609\PHPStan\PhpDocParser\Ast\Type;

use EasyCI20220609\PHPStan\PhpDocParser\Ast\NodeAttributes;
class OffsetAccessTypeNode implements TypeNode
{
    use NodeAttributes;
    /** @var TypeNode */
    public $type;
    /** @var TypeNode */
    public $offset;
    public function __construct(TypeNode $type, TypeNode $offset)
    {
        $this->type = $type;
        $this->offset = $offset;
    }
    public function __toString() : string
    {
        return $this->type . '[' . $this->offset . ']';
    }
}
