<?php

declare (strict_types=1);
namespace EasyCI202212\PhpParser\Node\Scalar\MagicConst;

use EasyCI202212\PhpParser\Node\Scalar\MagicConst;
class Namespace_ extends MagicConst
{
    public function getName() : string
    {
        return '__NAMESPACE__';
    }
    public function getType() : string
    {
        return 'Scalar_MagicConst_Namespace';
    }
}
