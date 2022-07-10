<?php

declare(strict_types=1);

/**
 * This file is part of MaxPHP.
 *
 * @link     https://github.com/marxphp
 * @license  https://github.com/marxphp/max/blob/master/LICENSE
 */

namespace Max\Routing\Annotations;

use Attribute;

#[Attribute(Attribute::TARGET_METHOD)]
class PatchMapping extends RequestMapping
{
    /**
     * @var array|string[]
     */
    public array $methods = ['PATCH'];
}
