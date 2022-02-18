<?php

declare (strict_types=1);
namespace EasyCI20220218\PhpParser\Node;

use EasyCI20220218\PhpParser\Node\VariadicPlaceholder;
use EasyCI20220218\PhpParser\NodeAbstract;
class Arg extends \EasyCI20220218\PhpParser\NodeAbstract
{
    /** @var Identifier|null Parameter name (for named parameters) */
    public $name;
    /** @var Expr Value to pass */
    public $value;
    /** @var bool Whether to pass by ref */
    public $byRef;
    /** @var bool Whether to unpack the argument */
    public $unpack;
    /**
     * Constructs a function call argument node.
     *
     * @param Expr  $value      Value to pass
     * @param bool  $byRef      Whether to pass by ref
     * @param bool  $unpack     Whether to unpack the argument
     * @param array $attributes Additional attributes
     * @param Identifier|null $name Parameter name (for named parameters)
     */
    public function __construct(\EasyCI20220218\PhpParser\Node\Expr $value, bool $byRef = \false, bool $unpack = \false, array $attributes = [], \EasyCI20220218\PhpParser\Node\Identifier $name = null)
    {
        $this->attributes = $attributes;
        $this->name = $name;
        $this->value = $value;
        $this->byRef = $byRef;
        $this->unpack = $unpack;
    }
    public function getSubNodeNames() : array
    {
        return ['name', 'value', 'byRef', 'unpack'];
    }
    public function getType() : string
    {
        return 'Arg';
    }
}
