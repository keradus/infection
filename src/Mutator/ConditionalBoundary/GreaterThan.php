<?php
/**
 * Copyright © 2017-2018 Maks Rafalko
 *
 * License: https://opensource.org/licenses/BSD-3-Clause New BSD License
 */

declare(strict_types=1);

namespace Infection\Mutator\ConditionalBoundary;

use Infection\Mutator\Util\Mutator;
use PhpParser\Node;

class GreaterThan extends Mutator
{
    /**
     * Replaces ">" with ">="
     *
     * @param Node $node
     *
     * @return Node\Expr\BinaryOp\GreaterOrEqual
     */
    public function mutate(Node $node)
    {
        return new Node\Expr\BinaryOp\GreaterOrEqual($node->left, $node->right, $node->getAttributes());
    }

    protected function mutatesNode(Node $node): bool
    {
        return $node instanceof Node\Expr\BinaryOp\Greater;
    }
}
